<?php

use AppKit\NS\NSTableHeaderCell\NSTableHeaderCell;

/*
| NSTableHeaderCell helpers — 1:1 over AppKit\NS\NSTableHeaderCell\NSTableHeaderCell
*/

if (! function_exists('ns_tableheadercell_create_text')) {
    function ns_tableheadercell_create_text(string $value = ''): int
    {
        return NSTableHeaderCell::createText($value);
    }
}

if (! function_exists('ns_tableheadercell_wrap')) {
    function ns_tableheadercell_wrap(int $nsTableHeaderCellPtr): int
    {
        return NSTableHeaderCell::wrap($nsTableHeaderCellPtr);
    }
}

if (! function_exists('ns_tableheadercell_destroy')) {
    function ns_tableheadercell_destroy(int $cell): void
    {
        NSTableHeaderCell::destroy($cell);
    }
}

if (! function_exists('ns_tableheadercell_nstableheadercell')) {
    function ns_tableheadercell_nstableheadercell(int $cell): int
    {
        return NSTableHeaderCell::nsTableHeaderCell($cell);
    }
}

if (! function_exists('ns_tableheadercell_set_title')) {
    function ns_tableheadercell_set_title(int $cell, string $title): void
    {
        NSTableHeaderCell::setTitle($cell, $title);
    }
}

if (! function_exists('ns_tableheadercell_get_title')) {
    function ns_tableheadercell_get_title(int $cell): string
    {
        return NSTableHeaderCell::getTitle($cell);
    }
}

if (! function_exists('ns_tableheadercell_set_state')) {
    function ns_tableheadercell_set_state(int $cell, int $state): void
    {
        NSTableHeaderCell::setState($cell, $state);
    }
}

if (! function_exists('ns_tableheadercell_get_state')) {
    function ns_tableheadercell_get_state(int $cell): int
    {
        return NSTableHeaderCell::getState($cell);
    }
}

if (! function_exists('ns_tableheadercell_set_enabled')) {
    function ns_tableheadercell_set_enabled(int $cell, bool $enabled): void
    {
        NSTableHeaderCell::setEnabled($cell, $enabled);
    }
}

if (! function_exists('ns_tableheadercell_is_enabled')) {
    function ns_tableheadercell_is_enabled(int $cell): bool
    {
        return NSTableHeaderCell::isEnabled($cell);
    }
}

if (! function_exists('ns_tableheadercell_set_tag')) {
    function ns_tableheadercell_set_tag(int $cell, int $tag): void
    {
        NSTableHeaderCell::setTag($cell, $tag);
    }
}

if (! function_exists('ns_tableheadercell_get_tag')) {
    function ns_tableheadercell_get_tag(int $cell): int
    {
        return NSTableHeaderCell::getTag($cell);
    }
}
