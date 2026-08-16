<?php

use AppKit\NS\NSFormCell\NSFormCell;

/*
| NSFormCell helpers — 1:1 over AppKit\NS\NSFormCell\NSFormCell
*/

if (! function_exists('ns_formcell_create_text')) {
    function ns_formcell_create_text(string $value = ''): int
    {
        return NSFormCell::createText($value);
    }
}

if (! function_exists('ns_formcell_wrap')) {
    function ns_formcell_wrap(int $nsFormCellPtr): int
    {
        return NSFormCell::wrap($nsFormCellPtr);
    }
}

if (! function_exists('ns_formcell_destroy')) {
    function ns_formcell_destroy(int $cell): void
    {
        NSFormCell::destroy($cell);
    }
}

if (! function_exists('ns_formcell_nsformcell')) {
    function ns_formcell_nsformcell(int $cell): int
    {
        return NSFormCell::nsFormCell($cell);
    }
}

if (! function_exists('ns_formcell_set_title')) {
    function ns_formcell_set_title(int $cell, string $title): void
    {
        NSFormCell::setTitle($cell, $title);
    }
}

if (! function_exists('ns_formcell_get_title')) {
    function ns_formcell_get_title(int $cell): string
    {
        return NSFormCell::getTitle($cell);
    }
}

if (! function_exists('ns_formcell_set_state')) {
    function ns_formcell_set_state(int $cell, int $state): void
    {
        NSFormCell::setState($cell, $state);
    }
}

if (! function_exists('ns_formcell_get_state')) {
    function ns_formcell_get_state(int $cell): int
    {
        return NSFormCell::getState($cell);
    }
}

if (! function_exists('ns_formcell_set_enabled')) {
    function ns_formcell_set_enabled(int $cell, bool $enabled): void
    {
        NSFormCell::setEnabled($cell, $enabled);
    }
}

if (! function_exists('ns_formcell_is_enabled')) {
    function ns_formcell_is_enabled(int $cell): bool
    {
        return NSFormCell::isEnabled($cell);
    }
}

if (! function_exists('ns_formcell_set_tag')) {
    function ns_formcell_set_tag(int $cell, int $tag): void
    {
        NSFormCell::setTag($cell, $tag);
    }
}

if (! function_exists('ns_formcell_get_tag')) {
    function ns_formcell_get_tag(int $cell): int
    {
        return NSFormCell::getTag($cell);
    }
}

if (! function_exists('ns_formcell_set_placeholder_string')) {
    function ns_formcell_set_placeholder_string(int $cell, string $placeholder): void
    {
        NSFormCell::setPlaceholderString($cell, $placeholder);
    }
}

if (! function_exists('ns_formcell_get_placeholder_string')) {
    function ns_formcell_get_placeholder_string(int $cell): string
    {
        return NSFormCell::getPlaceholderString($cell);
    }
}

if (! function_exists('ns_formcell_set_title_width')) {
    function ns_formcell_set_title_width(int $cell, float $width): void
    {
        NSFormCell::setTitleWidth($cell, $width);
    }
}

if (! function_exists('ns_formcell_get_title_width')) {
    function ns_formcell_get_title_width(int $cell): float
    {
        return NSFormCell::getTitleWidth($cell);
    }
}

if (! function_exists('ns_formcell_set_string')) {
    function ns_formcell_set_string(int $cell, string $value): void
    {
        NSFormCell::setStringValue($cell, $value);
    }
}

if (! function_exists('ns_formcell_get_string')) {
    function ns_formcell_get_string(int $cell): string
    {
        return NSFormCell::getStringValue($cell);
    }
}
