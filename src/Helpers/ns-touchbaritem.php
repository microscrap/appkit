<?php

use AppKit\NS\NSTouchBarItem\NSTouchBarItem;

/*
| NSTouchBarItem helpers — 1:1 over AppKit\NS\NSTouchBarItem\NSTouchBarItem
*/

if (! function_exists('ns_touchbaritem_create')) {
    function ns_touchbaritem_create(string $identifier): int
    {
        return NSTouchBarItem::create($identifier);
    }
}

if (! function_exists('ns_touchbaritem_wrap')) {
    function ns_touchbaritem_wrap(int $nsTouchBarItemPtr): int
    {
        return NSTouchBarItem::wrap($nsTouchBarItemPtr);
    }
}

if (! function_exists('ns_touchbaritem_destroy')) {
    function ns_touchbaritem_destroy(int $item): void
    {
        NSTouchBarItem::destroy($item);
    }
}

if (! function_exists('ns_touchbaritem_nstouchbaritem')) {
    function ns_touchbaritem_nstouchbaritem(int $item): int
    {
        return NSTouchBarItem::nsTouchBarItem($item);
    }
}

if (! function_exists('ns_touchbaritem_get_identifier')) {
    function ns_touchbaritem_get_identifier(int $item): string
    {
        return NSTouchBarItem::getIdentifier($item);
    }
}

if (! function_exists('ns_touchbaritem_set_visibility_priority')) {
    function ns_touchbaritem_set_visibility_priority(int $item, float $priority): void
    {
        NSTouchBarItem::setVisibilityPriority($item, $priority);
    }
}

if (! function_exists('ns_touchbaritem_get_visibility_priority')) {
    function ns_touchbaritem_get_visibility_priority(int $item): float
    {
        return NSTouchBarItem::getVisibilityPriority($item);
    }
}

if (! function_exists('ns_touchbaritem_get_customization_label')) {
    function ns_touchbaritem_get_customization_label(int $item): string
    {
        return NSTouchBarItem::getCustomizationLabel($item);
    }
}

if (! function_exists('ns_touchbaritem_is_visible')) {
    function ns_touchbaritem_is_visible(int $item): bool
    {
        return NSTouchBarItem::isVisible($item);
    }
}

if (! function_exists('ns_touchbaritem_get_view')) {
    function ns_touchbaritem_get_view(int $item): int
    {
        return NSTouchBarItem::getView($item);
    }
}
