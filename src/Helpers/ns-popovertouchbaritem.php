<?php

use AppKit\NS\NSPopoverTouchBarItem\NSPopoverTouchBarItem;

/*
| NSPopoverTouchBarItem helpers — 1:1 over AppKit\NS\NSPopoverTouchBarItem\NSPopoverTouchBarItem
*/

if (! function_exists('ns_popovertouchbaritem_create')) {
    function ns_popovertouchbaritem_create(string $identifier): int
    {
        return NSPopoverTouchBarItem::create($identifier);
    }
}

if (! function_exists('ns_popovertouchbaritem_wrap')) {
    function ns_popovertouchbaritem_wrap(int $ptr): int
    {
        return NSPopoverTouchBarItem::wrap($ptr);
    }
}

if (! function_exists('ns_popovertouchbaritem_destroy')) {
    function ns_popovertouchbaritem_destroy(int $item): void
    {
        NSPopoverTouchBarItem::destroy($item);
    }
}

if (! function_exists('ns_popovertouchbaritem_nspopovertouchbaritem')) {
    function ns_popovertouchbaritem_nspopovertouchbaritem(int $item): int
    {
        return NSPopoverTouchBarItem::nsPopoverTouchBarItem($item);
    }
}

if (! function_exists('ns_popovertouchbaritem_set_popover_touchbar')) {
    function ns_popovertouchbaritem_set_popover_touchbar(int $item, int $bar): void
    {
        NSPopoverTouchBarItem::setPopoverTouchBar($item, $bar);
    }
}

if (! function_exists('ns_popovertouchbaritem_show_popover')) {
    function ns_popovertouchbaritem_show_popover(int $item): void
    {
        NSPopoverTouchBarItem::showPopover($item);
    }
}

if (! function_exists('ns_popovertouchbaritem_dismiss_popover')) {
    function ns_popovertouchbaritem_dismiss_popover(int $item): void
    {
        NSPopoverTouchBarItem::dismissPopover($item);
    }
}
