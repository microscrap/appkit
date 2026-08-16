<?php

use AppKit\NS\NSBrowser\NSBrowser;

/*
| NSBrowser helpers — 1:1 over AppKit\NS\NSBrowser\NSBrowser
*/

if (! function_exists('ns_browser_create')) {
    function ns_browser_create(int $x, int $y, int $width, int $height): int
    {
        return NSBrowser::create($x, $y, $width, $height);
    }
}

if (! function_exists('ns_browser_destroy')) {
    function ns_browser_destroy(int $browser): void
    {
        NSBrowser::destroy($browser);
    }
}

if (! function_exists('ns_browser_set_path')) {
    function ns_browser_set_path(int $browser, string $path): void
    {
        NSBrowser::setPath($browser, $path);
    }
}

if (! function_exists('ns_browser_get_path')) {
    function ns_browser_get_path(int $browser): string
    {
        return NSBrowser::getPath($browser);
    }
}

if (! function_exists('ns_browser_set_max_visible_columns')) {
    function ns_browser_set_max_visible_columns(int $browser, int $count): void
    {
        NSBrowser::setMaxVisibleColumns($browser, $count);
    }
}

if (! function_exists('ns_browser_get_max_visible_columns')) {
    function ns_browser_get_max_visible_columns(int $browser): int
    {
        return NSBrowser::getMaxVisibleColumns($browser);
    }
}

if (! function_exists('ns_browser_last_column')) {
    function ns_browser_last_column(int $browser): int
    {
        return NSBrowser::lastColumn($browser);
    }
}

if (! function_exists('ns_browser_reload_column')) {
    function ns_browser_reload_column(int $browser, int $column): void
    {
        NSBrowser::reloadColumn($browser, $column);
    }
}

if (! function_exists('ns_browser_set_takes_title_from_previous_column')) {
    function ns_browser_set_takes_title_from_previous_column(int $browser, bool $flag): void
    {
        NSBrowser::setTakesTitleFromPreviousColumn($browser, $flag);
    }
}

if (! function_exists('ns_browser_takes_title_from_previous_column')) {
    function ns_browser_takes_title_from_previous_column(int $browser): bool
    {
        return NSBrowser::takesTitleFromPreviousColumn($browser);
    }
}

if (! function_exists('ns_browser_selected_row_in_column')) {
    function ns_browser_selected_row_in_column(int $browser, int $column): int
    {
        return NSBrowser::selectedRowInColumn($browser, $column);
    }
}

if (! function_exists('ns_browser_select_row_in_column')) {
    function ns_browser_select_row_in_column(int $browser, int $row, int $column): void
    {
        NSBrowser::selectRowInColumn($browser, $row, $column);
    }
}
