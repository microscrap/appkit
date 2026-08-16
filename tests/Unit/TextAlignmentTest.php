<?php

namespace DeptOfScrapyardRobotics\Tests\Unit;

use Microscrap\Bindings\AppKit\Enums\TextAlignment;

it('matches current macOS NSTextAlignment ABI ints', function (): void {
    expect(TextAlignment::LEFT->value)->toBe(0);
    expect(TextAlignment::CENTER->value)->toBe(1);
    expect(TextAlignment::RIGHT->value)->toBe(2);
    expect(TextAlignment::JUSTIFIED->value)->toBe(3);
    expect(TextAlignment::NATURAL->value)->toBe(4);
});

it('unwraps TextAlignment in ns_control_set_alignment signature', function (): void {
    $source = file_get_contents(dirname(__DIR__, 2).'/src/Helpers/ns-control.php');
    expect($source)->toContain('TextAlignment|int $alignment');
    expect($source)->toContain('$alignment instanceof TextAlignment ? $alignment->value : $alignment');
});
