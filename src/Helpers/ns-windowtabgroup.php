<?php

use AppKit\NS\NSWindowTabGroup\NSWindowTabGroup;

/*
| NSWindowTabGroup helpers — 1:1 over AppKit\NS\NSWindowTabGroup\NSWindowTabGroup
*/

if (! function_exists('ns_windowtabgroup_wrap')) {
    function ns_windowtabgroup_wrap(int $nsWindowTabGroupPtr): int
    {
        return NSWindowTabGroup::wrap($nsWindowTabGroupPtr);
    }
}

if (! function_exists('ns_windowtabgroup_destroy')) {
    function ns_windowtabgroup_destroy(int $group): void
    {
        NSWindowTabGroup::destroy($group);
    }
}

if (! function_exists('ns_windowtabgroup_nswindowtabgroup')) {
    function ns_windowtabgroup_nswindowtabgroup(int $group): int
    {
        return NSWindowTabGroup::nsWindowTabGroup($group);
    }
}

if (! function_exists('ns_windowtabgroup_identifier')) {
    function ns_windowtabgroup_identifier(int $group): string
    {
        return NSWindowTabGroup::identifier($group);
    }
}

if (! function_exists('ns_windowtabgroup_windows_count')) {
    function ns_windowtabgroup_windows_count(int $group): int
    {
        return NSWindowTabGroup::windowsCount($group);
    }
}

if (! function_exists('ns_windowtabgroup_window_at')) {
    function ns_windowtabgroup_window_at(int $group, int $index): int
    {
        return NSWindowTabGroup::windowAt($group, $index);
    }
}

if (! function_exists('ns_windowtabgroup_is_overview_visible')) {
    function ns_windowtabgroup_is_overview_visible(int $group): bool
    {
        return NSWindowTabGroup::isOverviewVisible($group);
    }
}

if (! function_exists('ns_windowtabgroup_set_overview_visible')) {
    function ns_windowtabgroup_set_overview_visible(int $group, bool $visible): void
    {
        NSWindowTabGroup::setOverviewVisible($group, $visible);
    }
}

if (! function_exists('ns_windowtabgroup_is_tab_bar_visible')) {
    function ns_windowtabgroup_is_tab_bar_visible(int $group): bool
    {
        return NSWindowTabGroup::isTabBarVisible($group);
    }
}

if (! function_exists('ns_windowtabgroup_selected_window')) {
    function ns_windowtabgroup_selected_window(int $group): int
    {
        return NSWindowTabGroup::selectedWindow($group);
    }
}

if (! function_exists('ns_windowtabgroup_set_selected_window')) {
    function ns_windowtabgroup_set_selected_window(int $group, int $window): void
    {
        NSWindowTabGroup::setSelectedWindow($group, $window);
    }
}

if (! function_exists('ns_windowtabgroup_add_window')) {
    function ns_windowtabgroup_add_window(int $group, int $window): void
    {
        NSWindowTabGroup::addWindow($group, $window);
    }
}

if (! function_exists('ns_windowtabgroup_insert_window')) {
    function ns_windowtabgroup_insert_window(int $group, int $window, int $index): void
    {
        NSWindowTabGroup::insertWindow($group, $window, $index);
    }
}

if (! function_exists('ns_windowtabgroup_remove_window')) {
    function ns_windowtabgroup_remove_window(int $group, int $window): void
    {
        NSWindowTabGroup::removeWindow($group, $window);
    }
}
