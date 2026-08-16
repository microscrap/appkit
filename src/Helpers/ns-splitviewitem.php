<?php

use AppKit\NS\NSSplitViewItem\NSSplitViewItem;

/*
| NSSplitViewItem helpers — 1:1 over AppKit\NS\NSSplitViewItem\NSSplitViewItem
*/

if (! function_exists('ns_splitviewitem_create')) {
    function ns_splitviewitem_create(int $viewController): int
    {
        return NSSplitViewItem::create($viewController);
    }
}

if (! function_exists('ns_splitviewitem_create_sidebar')) {
    function ns_splitviewitem_create_sidebar(int $viewController): int
    {
        return NSSplitViewItem::createSidebar($viewController);
    }
}

if (! function_exists('ns_splitviewitem_create_content_list')) {
    function ns_splitviewitem_create_content_list(int $viewController): int
    {
        return NSSplitViewItem::createContentList($viewController);
    }
}

if (! function_exists('ns_splitviewitem_create_inspector')) {
    function ns_splitviewitem_create_inspector(int $viewController): int
    {
        return NSSplitViewItem::createInspector($viewController);
    }
}

if (! function_exists('ns_splitviewitem_wrap')) {
    function ns_splitviewitem_wrap(int $nsSplitViewItemPtr): int
    {
        return NSSplitViewItem::wrap($nsSplitViewItemPtr);
    }
}

if (! function_exists('ns_splitviewitem_destroy')) {
    function ns_splitviewitem_destroy(int $item): void
    {
        NSSplitViewItem::destroy($item);
    }
}

if (! function_exists('ns_splitviewitem_nssplitviewitem')) {
    function ns_splitviewitem_nssplitviewitem(int $item): int
    {
        return NSSplitViewItem::nsSplitViewItem($item);
    }
}

if (! function_exists('ns_splitviewitem_set_view_controller')) {
    function ns_splitviewitem_set_view_controller(int $item, int $viewController): void
    {
        NSSplitViewItem::setViewController($item, $viewController);
    }
}

if (! function_exists('ns_splitviewitem_view_controller')) {
    function ns_splitviewitem_view_controller(int $item): int
    {
        return NSSplitViewItem::viewController($item);
    }
}

if (! function_exists('ns_splitviewitem_set_collapsed')) {
    function ns_splitviewitem_set_collapsed(int $item, bool $flag): void
    {
        NSSplitViewItem::setCollapsed($item, $flag);
    }
}

if (! function_exists('ns_splitviewitem_is_collapsed')) {
    function ns_splitviewitem_is_collapsed(int $item): bool
    {
        return NSSplitViewItem::isCollapsed($item);
    }
}

if (! function_exists('ns_splitviewitem_set_can_collapse')) {
    function ns_splitviewitem_set_can_collapse(int $item, bool $flag): void
    {
        NSSplitViewItem::setCanCollapse($item, $flag);
    }
}

if (! function_exists('ns_splitviewitem_can_collapse')) {
    function ns_splitviewitem_can_collapse(int $item): bool
    {
        return NSSplitViewItem::canCollapse($item);
    }
}

if (! function_exists('ns_splitviewitem_set_minimum_thickness')) {
    function ns_splitviewitem_set_minimum_thickness(int $item, float $value): void
    {
        NSSplitViewItem::setMinimumThickness($item, $value);
    }
}

if (! function_exists('ns_splitviewitem_get_minimum_thickness')) {
    function ns_splitviewitem_get_minimum_thickness(int $item): float
    {
        return NSSplitViewItem::getMinimumThickness($item);
    }
}

if (! function_exists('ns_splitviewitem_set_maximum_thickness')) {
    function ns_splitviewitem_set_maximum_thickness(int $item, float $value): void
    {
        NSSplitViewItem::setMaximumThickness($item, $value);
    }
}

if (! function_exists('ns_splitviewitem_get_maximum_thickness')) {
    function ns_splitviewitem_get_maximum_thickness(int $item): float
    {
        return NSSplitViewItem::getMaximumThickness($item);
    }
}

if (! function_exists('ns_splitviewitem_set_preferred_thickness_fraction')) {
    function ns_splitviewitem_set_preferred_thickness_fraction(int $item, float $value): void
    {
        NSSplitViewItem::setPreferredThicknessFraction($item, $value);
    }
}

if (! function_exists('ns_splitviewitem_get_preferred_thickness_fraction')) {
    function ns_splitviewitem_get_preferred_thickness_fraction(int $item): float
    {
        return NSSplitViewItem::getPreferredThicknessFraction($item);
    }
}

if (! function_exists('ns_splitviewitem_set_holding_priority')) {
    function ns_splitviewitem_set_holding_priority(int $item, float $priority): void
    {
        NSSplitViewItem::setHoldingPriority($item, $priority);
    }
}

if (! function_exists('ns_splitviewitem_get_holding_priority')) {
    function ns_splitviewitem_get_holding_priority(int $item): float
    {
        return NSSplitViewItem::getHoldingPriority($item);
    }
}

if (! function_exists('ns_splitviewitem_set_spring_loaded')) {
    function ns_splitviewitem_set_spring_loaded(int $item, bool $flag): void
    {
        NSSplitViewItem::setSpringLoaded($item, $flag);
    }
}

if (! function_exists('ns_splitviewitem_is_spring_loaded')) {
    function ns_splitviewitem_is_spring_loaded(int $item): bool
    {
        return NSSplitViewItem::isSpringLoaded($item);
    }
}

if (! function_exists('ns_splitviewitem_get_behavior')) {
    function ns_splitviewitem_get_behavior(int $item): int
    {
        return NSSplitViewItem::getBehavior($item);
    }
}
