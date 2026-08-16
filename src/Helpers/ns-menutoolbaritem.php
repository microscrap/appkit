<?php

use AppKit\NS\NSMenuToolbarItem\NSMenuToolbarItem;

/*
| NSMenuToolbarItem helpers — 1:1 over AppKit\NS\NSMenuToolbarItem\NSMenuToolbarItem
*/

if (! function_exists('ns_menutoolbaritem_create')) {
    function ns_menutoolbaritem_create(string $identifier): int
    {
        return NSMenuToolbarItem::create($identifier);
    }
}

if (! function_exists('ns_menutoolbaritem_wrap')) {
    function ns_menutoolbaritem_wrap(int $nsMenuToolbarItemPtr): int
    {
        return NSMenuToolbarItem::wrap($nsMenuToolbarItemPtr);
    }
}

if (! function_exists('ns_menutoolbaritem_destroy')) {
    function ns_menutoolbaritem_destroy(int $item): void
    {
        NSMenuToolbarItem::destroy($item);
    }
}

if (! function_exists('ns_menutoolbaritem_nsmenutoolbaritem')) {
    function ns_menutoolbaritem_nsmenutoolbaritem(int $item): int
    {
        return NSMenuToolbarItem::nsMenuToolbarItem($item);
    }
}

if (! function_exists('ns_menutoolbaritem_set_shows_indicator')) {
    function ns_menutoolbaritem_set_shows_indicator(int $item, bool $flag): void
    {
        NSMenuToolbarItem::setShowsIndicator($item, $flag);
    }
}

if (! function_exists('ns_menutoolbaritem_shows_indicator')) {
    function ns_menutoolbaritem_shows_indicator(int $item): bool
    {
        return NSMenuToolbarItem::showsIndicator($item);
    }
}

if (! function_exists('ns_menutoolbaritem_set_label')) {
    function ns_menutoolbaritem_set_label(int $item, string $label): void
    {
        NSMenuToolbarItem::setLabel($item, $label);
    }
}

if (! function_exists('ns_menutoolbaritem_get_label')) {
    function ns_menutoolbaritem_get_label(int $item): string
    {
        return NSMenuToolbarItem::getLabel($item);
    }
}

if (! function_exists('ns_menutoolbaritem_set_tool_tip')) {
    function ns_menutoolbaritem_set_tool_tip(int $item, string $tip): void
    {
        NSMenuToolbarItem::setToolTip($item, $tip);
    }
}

if (! function_exists('ns_menutoolbaritem_get_tool_tip')) {
    function ns_menutoolbaritem_get_tool_tip(int $item): string
    {
        return NSMenuToolbarItem::getToolTip($item);
    }
}
