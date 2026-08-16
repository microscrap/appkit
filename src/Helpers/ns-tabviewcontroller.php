<?php

use AppKit\NS\NSTabViewController\NSTabViewController;

/*
| NSTabViewController helpers — 1:1 over AppKit\NS\NSTabViewController\NSTabViewController
*/

if (! function_exists('ns_tabviewcontroller_create')) {
    function ns_tabviewcontroller_create(): int
    {
        return NSTabViewController::create();
    }
}

if (! function_exists('ns_tabviewcontroller_wrap')) {
    function ns_tabviewcontroller_wrap(int $nsTabViewControllerPtr): int
    {
        return NSTabViewController::wrap($nsTabViewControllerPtr);
    }
}

if (! function_exists('ns_tabviewcontroller_destroy')) {
    function ns_tabviewcontroller_destroy(int $controller): void
    {
        NSTabViewController::destroy($controller);
    }
}

if (! function_exists('ns_tabviewcontroller_nstabviewcontroller')) {
    function ns_tabviewcontroller_nstabviewcontroller(int $controller): int
    {
        return NSTabViewController::nsTabViewController($controller);
    }
}

if (! function_exists('ns_tabviewcontroller_set_tab_style')) {
    function ns_tabviewcontroller_set_tab_style(int $controller, int $style): void
    {
        NSTabViewController::setTabStyle($controller, $style);
    }
}

if (! function_exists('ns_tabviewcontroller_get_tab_style')) {
    function ns_tabviewcontroller_get_tab_style(int $controller): int
    {
        return NSTabViewController::getTabStyle($controller);
    }
}

if (! function_exists('ns_tabviewcontroller_set_selected_tab_view_item_index')) {
    function ns_tabviewcontroller_set_selected_tab_view_item_index(int $controller, int $index): void
    {
        NSTabViewController::setSelectedTabViewItemIndex($controller, $index);
    }
}

if (! function_exists('ns_tabviewcontroller_get_selected_tab_view_item_index')) {
    function ns_tabviewcontroller_get_selected_tab_view_item_index(int $controller): int
    {
        return NSTabViewController::getSelectedTabViewItemIndex($controller);
    }
}

if (! function_exists('ns_tabviewcontroller_add_tab_view_item')) {
    function ns_tabviewcontroller_add_tab_view_item(int $controller, int $item): void
    {
        NSTabViewController::addTabViewItem($controller, $item);
    }
}

if (! function_exists('ns_tabviewcontroller_remove_tab_view_item')) {
    function ns_tabviewcontroller_remove_tab_view_item(int $controller, int $item): void
    {
        NSTabViewController::removeTabViewItem($controller, $item);
    }
}

if (! function_exists('ns_tabviewcontroller_tab_view_item_count')) {
    function ns_tabviewcontroller_tab_view_item_count(int $controller): int
    {
        return NSTabViewController::tabViewItemCount($controller);
    }
}

if (! function_exists('ns_tabviewcontroller_tab_view')) {
    function ns_tabviewcontroller_tab_view(int $controller): int
    {
        return NSTabViewController::tabView($controller);
    }
}

if (! function_exists('ns_tabviewcontroller_set_can_propagate_selected_child_view_controller_title')) {
    function ns_tabviewcontroller_set_can_propagate_selected_child_view_controller_title(int $controller, bool $flag): void
    {
        NSTabViewController::setCanPropagateSelectedChildViewControllerTitle($controller, $flag);
    }
}

if (! function_exists('ns_tabviewcontroller_can_propagate_selected_child_view_controller_title')) {
    function ns_tabviewcontroller_can_propagate_selected_child_view_controller_title(int $controller): bool
    {
        return NSTabViewController::canPropagateSelectedChildViewControllerTitle($controller);
    }
}
