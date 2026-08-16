<?php

use AppKit\NS\NSActionCell\NSActionCell;

/*
| NSActionCell helpers — 1:1 over AppKit\NS\NSActionCell\NSActionCell
*/

if (! function_exists('ns_actioncell_create_text')) {
    function ns_actioncell_create_text(string $title = ''): int
    {
        return NSActionCell::createText($title);
    }
}

if (! function_exists('ns_actioncell_wrap')) {
    function ns_actioncell_wrap(int $nsActionCellPtr): int
    {
        return NSActionCell::wrap($nsActionCellPtr);
    }
}

if (! function_exists('ns_actioncell_destroy')) {
    function ns_actioncell_destroy(int $cell): void
    {
        NSActionCell::destroy($cell);
    }
}

if (! function_exists('ns_actioncell_nsactioncell')) {
    function ns_actioncell_nsactioncell(int $cell): int
    {
        return NSActionCell::nsActionCell($cell);
    }
}

if (! function_exists('ns_actioncell_set_title')) {
    function ns_actioncell_set_title(int $cell, string $title): void
    {
        NSActionCell::setTitle($cell, $title);
    }
}

if (! function_exists('ns_actioncell_get_title')) {
    function ns_actioncell_get_title(int $cell): string
    {
        return NSActionCell::getTitle($cell);
    }
}

if (! function_exists('ns_actioncell_set_state')) {
    function ns_actioncell_set_state(int $cell, int $state): void
    {
        NSActionCell::setState($cell, $state);
    }
}

if (! function_exists('ns_actioncell_get_state')) {
    function ns_actioncell_get_state(int $cell): int
    {
        return NSActionCell::getState($cell);
    }
}

if (! function_exists('ns_actioncell_set_enabled')) {
    function ns_actioncell_set_enabled(int $cell, bool $enabled): void
    {
        NSActionCell::setEnabled($cell, $enabled);
    }
}

if (! function_exists('ns_actioncell_is_enabled')) {
    function ns_actioncell_is_enabled(int $cell): bool
    {
        return NSActionCell::isEnabled($cell);
    }
}

if (! function_exists('ns_actioncell_set_tag')) {
    function ns_actioncell_set_tag(int $cell, int $tag): void
    {
        NSActionCell::setTag($cell, $tag);
    }
}

if (! function_exists('ns_actioncell_get_tag')) {
    function ns_actioncell_get_tag(int $cell): int
    {
        return NSActionCell::getTag($cell);
    }
}
