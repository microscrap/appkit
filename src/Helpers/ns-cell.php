<?php

use AppKit\NS\NSCell\NSCell;

/*
| NSCell helpers — 1:1 over AppKit\NS\NSCell\NSCell
*/

if (! function_exists('ns_cell_create_text')) {
    function ns_cell_create_text(string $title = ''): int
    {
        return NSCell::createText($title);
    }
}

if (! function_exists('ns_cell_wrap')) {
    function ns_cell_wrap(int $nsCellPtr): int
    {
        return NSCell::wrap($nsCellPtr);
    }
}

if (! function_exists('ns_cell_destroy')) {
    function ns_cell_destroy(int $cell): void
    {
        NSCell::destroy($cell);
    }
}

if (! function_exists('ns_cell_nscell')) {
    function ns_cell_nscell(int $cell): int
    {
        return NSCell::nsCell($cell);
    }
}

if (! function_exists('ns_cell_set_title')) {
    function ns_cell_set_title(int $cell, string $title): void
    {
        NSCell::setTitle($cell, $title);
    }
}

if (! function_exists('ns_cell_get_title')) {
    function ns_cell_get_title(int $cell): string
    {
        return NSCell::getTitle($cell);
    }
}

if (! function_exists('ns_cell_set_state')) {
    function ns_cell_set_state(int $cell, int $state): void
    {
        NSCell::setState($cell, $state);
    }
}

if (! function_exists('ns_cell_get_state')) {
    function ns_cell_get_state(int $cell): int
    {
        return NSCell::getState($cell);
    }
}

if (! function_exists('ns_cell_set_enabled')) {
    function ns_cell_set_enabled(int $cell, bool $enabled): void
    {
        NSCell::setEnabled($cell, $enabled);
    }
}

if (! function_exists('ns_cell_is_enabled')) {
    function ns_cell_is_enabled(int $cell): bool
    {
        return NSCell::isEnabled($cell);
    }
}

if (! function_exists('ns_cell_set_tag')) {
    function ns_cell_set_tag(int $cell, int $tag): void
    {
        NSCell::setTag($cell, $tag);
    }
}

if (! function_exists('ns_cell_get_tag')) {
    function ns_cell_get_tag(int $cell): int
    {
        return NSCell::getTag($cell);
    }
}

if (! function_exists('ns_cell_set_string')) {
    function ns_cell_set_string(int $cell, string $value): void
    {
        NSCell::setStringValue($cell, $value);
    }
}

if (! function_exists('ns_cell_get_string')) {
    function ns_cell_get_string(int $cell): string
    {
        return NSCell::getStringValue($cell);
    }
}
