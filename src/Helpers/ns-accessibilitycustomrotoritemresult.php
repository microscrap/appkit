<?php

use AppKit\NS\NSAccessibilityCustomRotorItemResult\NSAccessibilityCustomRotorItemResult;

/*
| NSAccessibilityCustomRotorItemResult helpers — 1:1 over AppKit\NS\NSAccessibilityCustomRotorItemResult\NSAccessibilityCustomRotorItemResult
*/

if (! function_exists('ns_accessibilitycustomrotoritemresult_create_with_target_element')) {
    function ns_accessibilitycustomrotoritemresult_create_with_target_element(int $element): int
    {
        return NSAccessibilityCustomRotorItemResult::createWithTargetElement($element);
    }
}

if (! function_exists('ns_accessibilitycustomrotoritemresult_create_with_token')) {
    function ns_accessibilitycustomrotoritemresult_create_with_token(string $token, string $label): int
    {
        return NSAccessibilityCustomRotorItemResult::createWithToken($token, $label);
    }
}

if (! function_exists('ns_accessibilitycustomrotoritemresult_wrap')) {
    function ns_accessibilitycustomrotoritemresult_wrap(int $ptr): int
    {
        return NSAccessibilityCustomRotorItemResult::wrap($ptr);
    }
}

if (! function_exists('ns_accessibilitycustomrotoritemresult_destroy')) {
    function ns_accessibilitycustomrotoritemresult_destroy(int $item): void
    {
        NSAccessibilityCustomRotorItemResult::destroy($item);
    }
}

if (! function_exists('ns_accessibilitycustomrotoritemresult_nsaccessibilitycustomrotoritem')) {
    function ns_accessibilitycustomrotoritemresult_nsaccessibilitycustomrotoritem(int $item): int
    {
        return NSAccessibilityCustomRotorItemResult::nsAccessibilityCustomRotorItem($item);
    }
}

if (! function_exists('ns_accessibilitycustomrotoritemresult_custom_label')) {
    function ns_accessibilitycustomrotoritemresult_custom_label(int $item): string
    {
        return NSAccessibilityCustomRotorItemResult::customLabel($item);
    }
}

if (! function_exists('ns_accessibilitycustomrotoritemresult_set_custom_label')) {
    function ns_accessibilitycustomrotoritemresult_set_custom_label(int $item, string $label): void
    {
        NSAccessibilityCustomRotorItemResult::setCustomLabel($item, $label);
    }
}

if (! function_exists('ns_accessibilitycustomrotoritemresult_set_target_range')) {
    function ns_accessibilitycustomrotoritemresult_set_target_range(int $item, int $location, int $length): void
    {
        NSAccessibilityCustomRotorItemResult::setTargetRange($item, $location, $length);
    }
}

if (! function_exists('ns_accessibilitycustomrotoritemresult_target_range')) {
    function ns_accessibilitycustomrotoritemresult_target_range(int $item): array
    {
        return NSAccessibilityCustomRotorItemResult::targetRange($item);
    }
}
