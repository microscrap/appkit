<?php

use AppKit\NS\NSAccessibilityElement\NSAccessibilityElement;

/*
| NSAccessibilityElement helpers — 1:1 over AppKit\NS\NSAccessibilityElement\NSAccessibilityElement
*/

if (! function_exists('ns_accessibilityelement_create')) {
    function ns_accessibilityelement_create(
        string $role,
        float $x,
        float $y,
        float $width,
        float $height,
        string $label = '',
        int $parent = 0
    ): int {
        return NSAccessibilityElement::create($role, $x, $y, $width, $height, $label, $parent);
    }
}

if (! function_exists('ns_accessibilityelement_wrap')) {
    function ns_accessibilityelement_wrap(int $nsAccessibilityElementPtr): int
    {
        return NSAccessibilityElement::wrap($nsAccessibilityElementPtr);
    }
}

if (! function_exists('ns_accessibilityelement_destroy')) {
    function ns_accessibilityelement_destroy(int $element): void
    {
        NSAccessibilityElement::destroy($element);
    }
}

if (! function_exists('ns_accessibilityelement_nsaccessibilityelement')) {
    function ns_accessibilityelement_nsaccessibilityelement(int $element): int
    {
        return NSAccessibilityElement::nsAccessibilityElement($element);
    }
}

if (! function_exists('ns_accessibilityelement_add_child')) {
    function ns_accessibilityelement_add_child(int $element, int $child): void
    {
        NSAccessibilityElement::addChild($element, $child);
    }
}

if (! function_exists('ns_accessibilityelement_set_frame_in_parent')) {
    function ns_accessibilityelement_set_frame_in_parent(
        int $element,
        float $x,
        float $y,
        float $width,
        float $height
    ): void {
        NSAccessibilityElement::setFrameInParent($element, $x, $y, $width, $height);
    }
}

if (! function_exists('ns_accessibilityelement_frame_in_parent')) {
    function ns_accessibilityelement_frame_in_parent(int $element): array
    {
        return NSAccessibilityElement::frameInParent($element);
    }
}
