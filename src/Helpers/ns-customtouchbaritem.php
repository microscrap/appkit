<?php

use AppKit\NS\NSCustomTouchBarItem\NSCustomTouchBarItem;

/*
| NSCustomTouchBarItem helpers — 1:1 over AppKit\NS\NSCustomTouchBarItem\NSCustomTouchBarItem
*/

if (! function_exists('ns_customtouchbaritem_create')) {
    function ns_customtouchbaritem_create(string $identifier): int
    {
        return NSCustomTouchBarItem::create($identifier);
    }
}

if (! function_exists('ns_customtouchbaritem_wrap')) {
    function ns_customtouchbaritem_wrap(int $ptr): int
    {
        return NSCustomTouchBarItem::wrap($ptr);
    }
}

if (! function_exists('ns_customtouchbaritem_destroy')) {
    function ns_customtouchbaritem_destroy(int $item): void
    {
        NSCustomTouchBarItem::destroy($item);
    }
}

if (! function_exists('ns_customtouchbaritem_nscustomtouchbaritem')) {
    function ns_customtouchbaritem_nscustomtouchbaritem(int $item): int
    {
        return NSCustomTouchBarItem::nsCustomTouchBarItem($item);
    }
}

if (! function_exists('ns_customtouchbaritem_set_view')) {
    function ns_customtouchbaritem_set_view(int $item, int $view): void
    {
        NSCustomTouchBarItem::setView($item, $view);
    }
}

if (! function_exists('ns_customtouchbaritem_get_view')) {
    function ns_customtouchbaritem_get_view(int $item): int
    {
        return NSCustomTouchBarItem::getView($item);
    }
}

if (! function_exists('ns_customtouchbaritem_set_customization_label')) {
    function ns_customtouchbaritem_set_customization_label(int $item, string $label): void
    {
        NSCustomTouchBarItem::setCustomizationLabel($item, $label);
    }
}

if (! function_exists('ns_customtouchbaritem_get_customization_label')) {
    function ns_customtouchbaritem_get_customization_label(int $item): string
    {
        return NSCustomTouchBarItem::getCustomizationLabel($item);
    }
}
