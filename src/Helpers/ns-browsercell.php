<?php

use AppKit\NS\NSBrowserCell\NSBrowserCell;

/*
| NSBrowserCell helpers — 1:1 over AppKit\NS\NSBrowserCell\NSBrowserCell
*/

if (! function_exists('ns_browsercell_create_text')) {
    function ns_browsercell_create_text(string $value = ''): int
    {
        return NSBrowserCell::createText($value);
    }
}

if (! function_exists('ns_browsercell_wrap')) {
    function ns_browsercell_wrap(int $nsBrowserCellPtr): int
    {
        return NSBrowserCell::wrap($nsBrowserCellPtr);
    }
}

if (! function_exists('ns_browsercell_destroy')) {
    function ns_browsercell_destroy(int $cell): void
    {
        NSBrowserCell::destroy($cell);
    }
}

if (! function_exists('ns_browsercell_nsbrowsercell')) {
    function ns_browsercell_nsbrowsercell(int $cell): int
    {
        return NSBrowserCell::nsBrowserCell($cell);
    }
}

if (! function_exists('ns_browsercell_set_title')) {
    function ns_browsercell_set_title(int $cell, string $title): void
    {
        NSBrowserCell::setTitle($cell, $title);
    }
}

if (! function_exists('ns_browsercell_get_title')) {
    function ns_browsercell_get_title(int $cell): string
    {
        return NSBrowserCell::getTitle($cell);
    }
}

if (! function_exists('ns_browsercell_set_state')) {
    function ns_browsercell_set_state(int $cell, int $state): void
    {
        NSBrowserCell::setState($cell, $state);
    }
}

if (! function_exists('ns_browsercell_get_state')) {
    function ns_browsercell_get_state(int $cell): int
    {
        return NSBrowserCell::getState($cell);
    }
}

if (! function_exists('ns_browsercell_set_enabled')) {
    function ns_browsercell_set_enabled(int $cell, bool $enabled): void
    {
        NSBrowserCell::setEnabled($cell, $enabled);
    }
}

if (! function_exists('ns_browsercell_is_enabled')) {
    function ns_browsercell_is_enabled(int $cell): bool
    {
        return NSBrowserCell::isEnabled($cell);
    }
}

if (! function_exists('ns_browsercell_set_tag')) {
    function ns_browsercell_set_tag(int $cell, int $tag): void
    {
        NSBrowserCell::setTag($cell, $tag);
    }
}

if (! function_exists('ns_browsercell_get_tag')) {
    function ns_browsercell_get_tag(int $cell): int
    {
        return NSBrowserCell::getTag($cell);
    }
}

if (! function_exists('ns_browsercell_set_leaf')) {
    function ns_browsercell_set_leaf(int $cell, bool $flag): void
    {
        NSBrowserCell::setLeaf($cell, $flag);
    }
}

if (! function_exists('ns_browsercell_is_leaf')) {
    function ns_browsercell_is_leaf(int $cell): bool
    {
        return NSBrowserCell::isLeaf($cell);
    }
}

if (! function_exists('ns_browsercell_set_loaded')) {
    function ns_browsercell_set_loaded(int $cell, bool $flag): void
    {
        NSBrowserCell::setLoaded($cell, $flag);
    }
}

if (! function_exists('ns_browsercell_is_loaded')) {
    function ns_browsercell_is_loaded(int $cell): bool
    {
        return NSBrowserCell::isLoaded($cell);
    }
}
