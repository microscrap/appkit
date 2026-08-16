<?php

use AppKit\NS\NSSplitViewController\NSSplitViewController;

/*
| NSSplitViewController helpers — 1:1 over AppKit\NS\NSSplitViewController\NSSplitViewController
*/

if (! function_exists('ns_splitviewcontroller_create')) {
    function ns_splitviewcontroller_create(): int
    {
        return NSSplitViewController::create();
    }
}

if (! function_exists('ns_splitviewcontroller_wrap')) {
    function ns_splitviewcontroller_wrap(int $nsSplitViewControllerPtr): int
    {
        return NSSplitViewController::wrap($nsSplitViewControllerPtr);
    }
}

if (! function_exists('ns_splitviewcontroller_destroy')) {
    function ns_splitviewcontroller_destroy(int $controller): void
    {
        NSSplitViewController::destroy($controller);
    }
}

if (! function_exists('ns_splitviewcontroller_nssplitviewcontroller')) {
    function ns_splitviewcontroller_nssplitviewcontroller(int $controller): int
    {
        return NSSplitViewController::nsSplitViewController($controller);
    }
}

if (! function_exists('ns_splitviewcontroller_add_split_view_item')) {
    function ns_splitviewcontroller_add_split_view_item(int $controller, int $item): void
    {
        NSSplitViewController::addSplitViewItem($controller, $item);
    }
}

if (! function_exists('ns_splitviewcontroller_remove_split_view_item')) {
    function ns_splitviewcontroller_remove_split_view_item(int $controller, int $item): void
    {
        NSSplitViewController::removeSplitViewItem($controller, $item);
    }
}

if (! function_exists('ns_splitviewcontroller_split_view_item_count')) {
    function ns_splitviewcontroller_split_view_item_count(int $controller): int
    {
        return NSSplitViewController::splitViewItemCount($controller);
    }
}

if (! function_exists('ns_splitviewcontroller_split_view_item_at')) {
    function ns_splitviewcontroller_split_view_item_at(int $controller, int $index): int
    {
        return NSSplitViewController::splitViewItemAt($controller, $index);
    }
}

if (! function_exists('ns_splitviewcontroller_set_minimum_thickness_for_inline_sidebars')) {
    function ns_splitviewcontroller_set_minimum_thickness_for_inline_sidebars(int $controller, float $value): void
    {
        NSSplitViewController::setMinimumThicknessForInlineSidebars($controller, $value);
    }
}

if (! function_exists('ns_splitviewcontroller_get_minimum_thickness_for_inline_sidebars')) {
    function ns_splitviewcontroller_get_minimum_thickness_for_inline_sidebars(int $controller): float
    {
        return NSSplitViewController::getMinimumThicknessForInlineSidebars($controller);
    }
}

if (! function_exists('ns_splitviewcontroller_split_view')) {
    function ns_splitviewcontroller_split_view(int $controller): int
    {
        return NSSplitViewController::splitView($controller);
    }
}

if (! function_exists('ns_splitviewcontroller_toggle_sidebar')) {
    function ns_splitviewcontroller_toggle_sidebar(int $controller): void
    {
        NSSplitViewController::toggleSidebar($controller);
    }
}
