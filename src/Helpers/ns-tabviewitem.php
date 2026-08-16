<?php

use AppKit\NS\NSTabViewItem\NSTabViewItem;

/*
| NSTabViewItem helpers — 1:1 over AppKit\NS\NSTabViewItem\NSTabViewItem
*/

if (! function_exists('ns_tabviewitem_create')) {
    function ns_tabviewitem_create(string $identifier = 'tab'): int
    {
        return NSTabViewItem::create($identifier);
    }
}

if (! function_exists('ns_tabviewitem_create_with_view_controller')) {
    function ns_tabviewitem_create_with_view_controller(int $viewController): int
    {
        return NSTabViewItem::createWithViewController($viewController);
    }
}

if (! function_exists('ns_tabviewitem_wrap')) {
    function ns_tabviewitem_wrap(int $nsTabViewItemPtr): int
    {
        return NSTabViewItem::wrap($nsTabViewItemPtr);
    }
}

if (! function_exists('ns_tabviewitem_destroy')) {
    function ns_tabviewitem_destroy(int $item): void
    {
        NSTabViewItem::destroy($item);
    }
}

if (! function_exists('ns_tabviewitem_nstabviewitem')) {
    function ns_tabviewitem_nstabviewitem(int $item): int
    {
        return NSTabViewItem::nsTabViewItem($item);
    }
}

if (! function_exists('ns_tabviewitem_set_label')) {
    function ns_tabviewitem_set_label(int $item, string $label): void
    {
        NSTabViewItem::setLabel($item, $label);
    }
}

if (! function_exists('ns_tabviewitem_get_label')) {
    function ns_tabviewitem_get_label(int $item): string
    {
        return NSTabViewItem::getLabel($item);
    }
}

if (! function_exists('ns_tabviewitem_set_tool_tip')) {
    function ns_tabviewitem_set_tool_tip(int $item, string $tip): void
    {
        NSTabViewItem::setToolTip($item, $tip);
    }
}

if (! function_exists('ns_tabviewitem_get_tool_tip')) {
    function ns_tabviewitem_get_tool_tip(int $item): string
    {
        return NSTabViewItem::getToolTip($item);
    }
}

if (! function_exists('ns_tabviewitem_set_view')) {
    function ns_tabviewitem_set_view(int $item, int $view): void
    {
        NSTabViewItem::setView($item, $view);
    }
}

if (! function_exists('ns_tabviewitem_view')) {
    function ns_tabviewitem_view(int $item): int
    {
        return NSTabViewItem::view($item);
    }
}

if (! function_exists('ns_tabviewitem_set_view_controller')) {
    function ns_tabviewitem_set_view_controller(int $item, int $viewController): void
    {
        NSTabViewItem::setViewController($item, $viewController);
    }
}

if (! function_exists('ns_tabviewitem_view_controller')) {
    function ns_tabviewitem_view_controller(int $item): int
    {
        return NSTabViewItem::viewController($item);
    }
}

if (! function_exists('ns_tabviewitem_tab_state')) {
    function ns_tabviewitem_tab_state(int $item): int
    {
        return NSTabViewItem::tabState($item);
    }
}
