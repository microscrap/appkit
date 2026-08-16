<?php

use AppKit\NS\NSWindowTab\NSWindowTab;

/*
| NSWindowTab helpers — 1:1 over AppKit\NS\NSWindowTab\NSWindowTab
*/

if (! function_exists('ns_windowtab_wrap')) {
    function ns_windowtab_wrap(int $nsWindowTabPtr): int
    {
        return NSWindowTab::wrap($nsWindowTabPtr);
    }
}

if (! function_exists('ns_windowtab_destroy')) {
    function ns_windowtab_destroy(int $tab): void
    {
        NSWindowTab::destroy($tab);
    }
}

if (! function_exists('ns_windowtab_nswindowtab')) {
    function ns_windowtab_nswindowtab(int $tab): int
    {
        return NSWindowTab::nsWindowTab($tab);
    }
}

if (! function_exists('ns_windowtab_title')) {
    function ns_windowtab_title(int $tab): string
    {
        return NSWindowTab::title($tab);
    }
}

if (! function_exists('ns_windowtab_set_title')) {
    function ns_windowtab_set_title(int $tab, string $title): void
    {
        NSWindowTab::setTitle($tab, $title);
    }
}

if (! function_exists('ns_windowtab_tool_tip')) {
    function ns_windowtab_tool_tip(int $tab): string
    {
        return NSWindowTab::toolTip($tab);
    }
}

if (! function_exists('ns_windowtab_set_tool_tip')) {
    function ns_windowtab_set_tool_tip(int $tab, string $toolTip): void
    {
        NSWindowTab::setToolTip($tab, $toolTip);
    }
}

if (! function_exists('ns_windowtab_set_accessory_view')) {
    function ns_windowtab_set_accessory_view(int $tab, int $view): void
    {
        NSWindowTab::setAccessoryView($tab, $view);
    }
}

if (! function_exists('ns_windowtab_accessory_view')) {
    function ns_windowtab_accessory_view(int $tab): int
    {
        return NSWindowTab::accessoryView($tab);
    }
}
