<?php

use AppKit\NS\NSGroupTouchBarItem\NSGroupTouchBarItem;

/*
| NSGroupTouchBarItem helpers — 1:1 over AppKit\NS\NSGroupTouchBarItem\NSGroupTouchBarItem
*/

if (! function_exists('ns_grouptouchbaritem_group_item')) {
    function ns_grouptouchbaritem_group_item(string $identifier, array $items): int
    {
        return NSGroupTouchBarItem::groupItem($identifier, $items);
    }
}

if (! function_exists('ns_grouptouchbaritem_alert_style_group_item')) {
    function ns_grouptouchbaritem_alert_style_group_item(string $identifier): int
    {
        return NSGroupTouchBarItem::alertStyleGroupItem($identifier);
    }
}

if (! function_exists('ns_grouptouchbaritem_wrap')) {
    function ns_grouptouchbaritem_wrap(int $ptr): int
    {
        return NSGroupTouchBarItem::wrap($ptr);
    }
}

if (! function_exists('ns_grouptouchbaritem_destroy')) {
    function ns_grouptouchbaritem_destroy(int $item): void
    {
        NSGroupTouchBarItem::destroy($item);
    }
}

if (! function_exists('ns_grouptouchbaritem_nsgrouptouchbaritem')) {
    function ns_grouptouchbaritem_nsgrouptouchbaritem(int $item): int
    {
        return NSGroupTouchBarItem::nsGroupTouchBarItem($item);
    }
}

if (! function_exists('ns_grouptouchbaritem_set_group_touchbar')) {
    function ns_grouptouchbaritem_set_group_touchbar(int $item, int $bar): void
    {
        NSGroupTouchBarItem::setGroupTouchBar($item, $bar);
    }
}

if (! function_exists('ns_grouptouchbaritem_get_group_touchbar')) {
    function ns_grouptouchbaritem_get_group_touchbar(int $item): int
    {
        return NSGroupTouchBarItem::getGroupTouchBar($item);
    }
}
