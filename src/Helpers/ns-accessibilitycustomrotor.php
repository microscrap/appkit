<?php

use AppKit\NS\NSAccessibilityCustomRotor\NSAccessibilityCustomRotor;
use Microscrap\Bindings\AppKit\Enums\AccessibilityCustomRotorType;

/*
| NSAccessibilityCustomRotor helpers — 1:1 over AppKit\NS\NSAccessibilityCustomRotor\NSAccessibilityCustomRotor
*/

if (! function_exists('ns_accessibilitycustomrotor_create')) {
    function ns_accessibilitycustomrotor_create(string $label): int
    {
        return NSAccessibilityCustomRotor::create($label);
    }
}

if (! function_exists('ns_accessibilitycustomrotor_create_with_type')) {
    function ns_accessibilitycustomrotor_create_with_type(AccessibilityCustomRotorType|int $rotorType): int
    {
        $value = $rotorType instanceof AccessibilityCustomRotorType ? $rotorType->value : $rotorType;

        return NSAccessibilityCustomRotor::createWithType($value);
    }
}

if (! function_exists('ns_accessibilitycustomrotor_wrap')) {
    function ns_accessibilitycustomrotor_wrap(int $nsAccessibilityCustomRotorPtr): int
    {
        return NSAccessibilityCustomRotor::wrap($nsAccessibilityCustomRotorPtr);
    }
}

if (! function_exists('ns_accessibilitycustomrotor_destroy')) {
    function ns_accessibilitycustomrotor_destroy(int $rotor): void
    {
        NSAccessibilityCustomRotor::destroy($rotor);
    }
}

if (! function_exists('ns_accessibilitycustomrotor_nsaccessibilitycustomrotor')) {
    function ns_accessibilitycustomrotor_nsaccessibilitycustomrotor(int $rotor): int
    {
        return NSAccessibilityCustomRotor::nsAccessibilityCustomRotor($rotor);
    }
}

if (! function_exists('ns_accessibilitycustomrotor_type')) {
    function ns_accessibilitycustomrotor_type(int $rotor): int
    {
        return NSAccessibilityCustomRotor::type($rotor);
    }
}

if (! function_exists('ns_accessibilitycustomrotor_set_type')) {
    function ns_accessibilitycustomrotor_set_type(int $rotor, AccessibilityCustomRotorType|int $rotorType): void
    {
        NSAccessibilityCustomRotor::setType(
            $rotor,
            $rotorType instanceof AccessibilityCustomRotorType ? $rotorType->value : $rotorType
        );
    }
}

if (! function_exists('ns_accessibilitycustomrotor_label')) {
    function ns_accessibilitycustomrotor_label(int $rotor): string
    {
        return NSAccessibilityCustomRotor::label($rotor);
    }
}

if (! function_exists('ns_accessibilitycustomrotor_set_label')) {
    function ns_accessibilitycustomrotor_set_label(int $rotor, string $label): void
    {
        NSAccessibilityCustomRotor::setLabel($rotor, $label);
    }
}

if (! function_exists('ns_accessibilitycustomrotor_set_next_item')) {
    function ns_accessibilitycustomrotor_set_next_item(int $rotor, int $item): void
    {
        NSAccessibilityCustomRotor::setNextItem($rotor, $item);
    }
}

if (! function_exists('ns_accessibilitycustomrotor_poll_search')) {
    function ns_accessibilitycustomrotor_poll_search(int $rotor): array
    {
        return NSAccessibilityCustomRotor::pollSearch($rotor);
    }
}
