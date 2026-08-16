<?php

use AppKit\NS\NSAccessibilityCustomRotorItem\NSAccessibilityCustomRotorItem;

/*
| NSAccessibilityCustomRotorItem helpers — 1:1 over AppKit\NS\NSAccessibilityCustomRotorItem\NSAccessibilityCustomRotorItem
*/

if (! function_exists('ns_accessibilitycustomrotoritem_create_with_target_element')) {
    function ns_accessibilitycustomrotoritem_create_with_target_element(int $element): int
    {
        return NSAccessibilityCustomRotorItem::createWithTargetElement($element);
    }
}

if (! function_exists('ns_accessibilitycustomrotoritem_create_with_token')) {
    function ns_accessibilitycustomrotoritem_create_with_token(string $token, string $label): int
    {
        return NSAccessibilityCustomRotorItem::createWithToken($token, $label);
    }
}

if (! function_exists('ns_accessibilitycustomrotoritem_wrap')) {
    function ns_accessibilitycustomrotoritem_wrap(int $ptr): int
    {
        return NSAccessibilityCustomRotorItem::wrap($ptr);
    }
}

if (! function_exists('ns_accessibilitycustomrotoritem_destroy')) {
    function ns_accessibilitycustomrotoritem_destroy(int $item): void
    {
        NSAccessibilityCustomRotorItem::destroy($item);
    }
}

if (! function_exists('ns_accessibilitycustomrotoritem_nsaccessibilitycustomrotoritem')) {
    function ns_accessibilitycustomrotoritem_nsaccessibilitycustomrotoritem(int $item): int
    {
        return NSAccessibilityCustomRotorItem::nsAccessibilityCustomRotorItem($item);
    }
}

if (! function_exists('ns_accessibilitycustomrotoritem_custom_label')) {
    function ns_accessibilitycustomrotoritem_custom_label(int $item): string
    {
        return NSAccessibilityCustomRotorItem::customLabel($item);
    }
}

if (! function_exists('ns_accessibilitycustomrotoritem_set_custom_label')) {
    function ns_accessibilitycustomrotoritem_set_custom_label(int $item, string $label): void
    {
        NSAccessibilityCustomRotorItem::setCustomLabel($item, $label);
    }
}

if (! function_exists('ns_accessibilitycustomrotoritem_set_target_range')) {
    function ns_accessibilitycustomrotoritem_set_target_range(int $item, int $location, int $length): void
    {
        NSAccessibilityCustomRotorItem::setTargetRange($item, $location, $length);
    }
}

if (! function_exists('ns_accessibilitycustomrotoritem_target_range')) {
    function ns_accessibilitycustomrotoritem_target_range(int $item): array
    {
        return NSAccessibilityCustomRotorItem::targetRange($item);
    }
}
