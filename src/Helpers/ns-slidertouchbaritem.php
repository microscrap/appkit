<?php

use AppKit\NS\NSSliderTouchBarItem\NSSliderTouchBarItem;

/*
| NSSliderTouchBarItem helpers — 1:1 over AppKit\NS\NSSliderTouchBarItem\NSSliderTouchBarItem
*/

if (! function_exists('ns_slidertouchbaritem_create')) {
    function ns_slidertouchbaritem_create(string $identifier): int
    {
        return NSSliderTouchBarItem::create($identifier);
    }
}

if (! function_exists('ns_slidertouchbaritem_wrap')) {
    function ns_slidertouchbaritem_wrap(int $ptr): int
    {
        return NSSliderTouchBarItem::wrap($ptr);
    }
}

if (! function_exists('ns_slidertouchbaritem_destroy')) {
    function ns_slidertouchbaritem_destroy(int $item): void
    {
        NSSliderTouchBarItem::destroy($item);
    }
}

if (! function_exists('ns_slidertouchbaritem_nsslidertouchbaritem')) {
    function ns_slidertouchbaritem_nsslidertouchbaritem(int $item): int
    {
        return NSSliderTouchBarItem::nsSliderTouchBarItem($item);
    }
}

if (! function_exists('ns_slidertouchbaritem_set_double_value')) {
    function ns_slidertouchbaritem_set_double_value(int $item, float $value): void
    {
        NSSliderTouchBarItem::setDoubleValue($item, $value);
    }
}

if (! function_exists('ns_slidertouchbaritem_get_double_value')) {
    function ns_slidertouchbaritem_get_double_value(int $item): float
    {
        return NSSliderTouchBarItem::getDoubleValue($item);
    }
}

if (! function_exists('ns_slidertouchbaritem_poll_action')) {
    function ns_slidertouchbaritem_poll_action(int $item): bool
    {
        return NSSliderTouchBarItem::pollAction($item);
    }
}
