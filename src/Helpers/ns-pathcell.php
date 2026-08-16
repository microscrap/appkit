<?php

use AppKit\NS\NSPathCell\NSPathCell;

/*
| NSPathCell helpers — 1:1 over AppKit\NS\NSPathCell\NSPathCell
*/

if (! function_exists('ns_pathcell_create_text')) {
    function ns_pathcell_create_text(string $value = ''): int
    {
        return NSPathCell::createText($value);
    }
}

if (! function_exists('ns_pathcell_wrap')) {
    function ns_pathcell_wrap(int $nsPathCellPtr): int
    {
        return NSPathCell::wrap($nsPathCellPtr);
    }
}

if (! function_exists('ns_pathcell_destroy')) {
    function ns_pathcell_destroy(int $cell): void
    {
        NSPathCell::destroy($cell);
    }
}

if (! function_exists('ns_pathcell_nspathcell')) {
    function ns_pathcell_nspathcell(int $cell): int
    {
        return NSPathCell::nsPathCell($cell);
    }
}

if (! function_exists('ns_pathcell_set_title')) {
    function ns_pathcell_set_title(int $cell, string $title): void
    {
        NSPathCell::setTitle($cell, $title);
    }
}

if (! function_exists('ns_pathcell_get_title')) {
    function ns_pathcell_get_title(int $cell): string
    {
        return NSPathCell::getTitle($cell);
    }
}

if (! function_exists('ns_pathcell_set_state')) {
    function ns_pathcell_set_state(int $cell, int $state): void
    {
        NSPathCell::setState($cell, $state);
    }
}

if (! function_exists('ns_pathcell_get_state')) {
    function ns_pathcell_get_state(int $cell): int
    {
        return NSPathCell::getState($cell);
    }
}

if (! function_exists('ns_pathcell_set_enabled')) {
    function ns_pathcell_set_enabled(int $cell, bool $enabled): void
    {
        NSPathCell::setEnabled($cell, $enabled);
    }
}

if (! function_exists('ns_pathcell_is_enabled')) {
    function ns_pathcell_is_enabled(int $cell): bool
    {
        return NSPathCell::isEnabled($cell);
    }
}

if (! function_exists('ns_pathcell_set_tag')) {
    function ns_pathcell_set_tag(int $cell, int $tag): void
    {
        NSPathCell::setTag($cell, $tag);
    }
}

if (! function_exists('ns_pathcell_get_tag')) {
    function ns_pathcell_get_tag(int $cell): int
    {
        return NSPathCell::getTag($cell);
    }
}

if (! function_exists('ns_pathcell_set_path_style')) {
    function ns_pathcell_set_path_style(int $cell, int $style): void
    {
        NSPathCell::setPathStyle($cell, $style);
    }
}

if (! function_exists('ns_pathcell_get_path_style')) {
    function ns_pathcell_get_path_style(int $cell): int
    {
        return NSPathCell::getPathStyle($cell);
    }
}

if (! function_exists('ns_pathcell_set_url_path')) {
    function ns_pathcell_set_url_path(int $cell, string $path): void
    {
        NSPathCell::setUrlPath($cell, $path);
    }
}

if (! function_exists('ns_pathcell_get_url_path')) {
    function ns_pathcell_get_url_path(int $cell): string
    {
        return NSPathCell::getUrlPath($cell);
    }
}

if (! function_exists('ns_pathcell_set_placeholder_string')) {
    function ns_pathcell_set_placeholder_string(int $cell, string $placeholder): void
    {
        NSPathCell::setPlaceholderString($cell, $placeholder);
    }
}

if (! function_exists('ns_pathcell_get_placeholder_string')) {
    function ns_pathcell_get_placeholder_string(int $cell): string
    {
        return NSPathCell::getPlaceholderString($cell);
    }
}

if (! function_exists('ns_pathcell_set_background_color')) {
    function ns_pathcell_set_background_color(int $cell, int $color): void
    {
        NSPathCell::setBackgroundColor($cell, $color);
    }
}

if (! function_exists('ns_pathcell_set_allowed_types')) {
    function ns_pathcell_set_allowed_types(int $cell, array $types): void
    {
        NSPathCell::setAllowedTypes($cell, $types);
    }
}

if (! function_exists('ns_pathcell_path_component_count')) {
    function ns_pathcell_path_component_count(int $cell): int
    {
        return NSPathCell::pathComponentCount($cell);
    }
}
