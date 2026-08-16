<?php

namespace DeptOfScrapyardRobotics\Tests\Unit;

use DeptOfScrapyardRobotics\Tests\Support\HelperNames;

function appkitHelperFunctionNames(): array
{
    $names = [];
    $dir = dirname(__DIR__, 2).'/src/Helpers';
    foreach (glob($dir.'/ns-*.php') ?: [] as $file) {
        $source = file_get_contents($file);
        preg_match_all("/function_exists\\('([^']+)'\\)/", $source, $matches);
        foreach ($matches[1] as $name) {
            $names[] = $name;
        }
    }

    return array_values(array_unique($names));
}

it('wraps every mapped AppKit\\NS method with its C ABI helper name', function (): void {
    $helpers = appkitHelperFunctionNames();

    foreach (HelperNames::map() as $extensionClass => $methods) {
        foreach ($methods as $method => $helper) {
            expect(in_array($helper, $helpers, true))->toBeTrue(
                "Missing helper for {$extensionClass}::{$method} (expected {$helper})"
            );
        }
    }
});

it('optionally mirrors live extension reflection when ext-appkit is loaded', function (): void {
    if (! extension_loaded('appkit')) {
        expect(true)->toBeTrue();

        return;
    }

    foreach (HelperNames::map() as $extensionClass => $expectedMethods) {
        if (! class_exists($extensionClass)) {
            expect(false)->toBeTrue("Missing live class {$extensionClass}");
            continue;
        }
        $ref = new \ReflectionClass($extensionClass);
        $live = [];
        foreach ($ref->getMethods(\ReflectionMethod::IS_STATIC | \ReflectionMethod::IS_PUBLIC) as $method) {
            if ($method->getDeclaringClass()->getName() === $extensionClass) {
                $live[] = $method->getName();
            }
        }
        sort($live);
        $expected = array_keys($expectedMethods);
        sort($expected);
        expect($live)->toBe($expected, "Live surface drift for {$extensionClass}");
    }
});
