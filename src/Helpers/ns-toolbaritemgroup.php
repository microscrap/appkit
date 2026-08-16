<?php

use AppKit\NS\NSToolbarItemGroup\NSToolbarItemGroup;

/*
| NSToolbarItemGroup helpers — 1:1 over AppKit\NS\NSToolbarItemGroup\NSToolbarItemGroup
*/

if (! function_exists('ns_toolbaritemgroup_create')) {
    function ns_toolbaritemgroup_create(string $identifier): int
    {
        return NSToolbarItemGroup::create($identifier);
    }
}

if (! function_exists('ns_toolbaritemgroup_group_with_titles')) {
    function ns_toolbaritemgroup_group_with_titles(string $identifier, array $titles, int $selectionMode, ?array $labels = null): int
    {
        return NSToolbarItemGroup::groupWithTitles($identifier, $titles, $selectionMode, $labels);
    }
}

if (! function_exists('ns_toolbaritemgroup_wrap')) {
    function ns_toolbaritemgroup_wrap(int $nsToolbarItemGroupPtr): int
    {
        return NSToolbarItemGroup::wrap($nsToolbarItemGroupPtr);
    }
}

if (! function_exists('ns_toolbaritemgroup_destroy')) {
    function ns_toolbaritemgroup_destroy(int $item): void
    {
        NSToolbarItemGroup::destroy($item);
    }
}

if (! function_exists('ns_toolbaritemgroup_nstoolbaritemgroup')) {
    function ns_toolbaritemgroup_nstoolbaritemgroup(int $item): int
    {
        return NSToolbarItemGroup::nsToolbarItemGroup($item);
    }
}

if (! function_exists('ns_toolbaritemgroup_set_subitems')) {
    function ns_toolbaritemgroup_set_subitems(int $item, array $subitems): void
    {
        NSToolbarItemGroup::setSubitems($item, $subitems);
    }
}

if (! function_exists('ns_toolbaritemgroup_subitems_count')) {
    function ns_toolbaritemgroup_subitems_count(int $item): int
    {
        return NSToolbarItemGroup::subitemsCount($item);
    }
}

if (! function_exists('ns_toolbaritemgroup_subitem_at')) {
    function ns_toolbaritemgroup_subitem_at(int $item, int $index): int
    {
        return NSToolbarItemGroup::subitemAt($item, $index);
    }
}

if (! function_exists('ns_toolbaritemgroup_set_control_representation')) {
    function ns_toolbaritemgroup_set_control_representation(int $item, int $representation): void
    {
        NSToolbarItemGroup::setControlRepresentation($item, $representation);
    }
}

if (! function_exists('ns_toolbaritemgroup_get_control_representation')) {
    function ns_toolbaritemgroup_get_control_representation(int $item): int
    {
        return NSToolbarItemGroup::getControlRepresentation($item);
    }
}

if (! function_exists('ns_toolbaritemgroup_set_selection_mode')) {
    function ns_toolbaritemgroup_set_selection_mode(int $item, int $mode): void
    {
        NSToolbarItemGroup::setSelectionMode($item, $mode);
    }
}

if (! function_exists('ns_toolbaritemgroup_get_selection_mode')) {
    function ns_toolbaritemgroup_get_selection_mode(int $item): int
    {
        return NSToolbarItemGroup::getSelectionMode($item);
    }
}

if (! function_exists('ns_toolbaritemgroup_set_selected_index')) {
    function ns_toolbaritemgroup_set_selected_index(int $item, int $index): void
    {
        NSToolbarItemGroup::setSelectedIndex($item, $index);
    }
}

if (! function_exists('ns_toolbaritemgroup_get_selected_index')) {
    function ns_toolbaritemgroup_get_selected_index(int $item): int
    {
        return NSToolbarItemGroup::getSelectedIndex($item);
    }
}

if (! function_exists('ns_toolbaritemgroup_set_selected_at_index')) {
    function ns_toolbaritemgroup_set_selected_at_index(int $item, int $index, bool $flag): void
    {
        NSToolbarItemGroup::setSelectedAtIndex($item, $index, $flag);
    }
}

if (! function_exists('ns_toolbaritemgroup_is_selected_at_index')) {
    function ns_toolbaritemgroup_is_selected_at_index(int $item, int $index): bool
    {
        return NSToolbarItemGroup::isSelectedAtIndex($item, $index);
    }
}
