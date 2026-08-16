<?php

use AppKit\NS\NSTextFieldCell\NSTextFieldCell;

/*
| NSTextFieldCell helpers — 1:1 over AppKit\NS\NSTextFieldCell\NSTextFieldCell
*/

if (! function_exists('ns_textfieldcell_create_text')) {
    function ns_textfieldcell_create_text(string $value = ''): int
    {
        return NSTextFieldCell::createText($value);
    }
}

if (! function_exists('ns_textfieldcell_wrap')) {
    function ns_textfieldcell_wrap(int $nsTextFieldCellPtr): int
    {
        return NSTextFieldCell::wrap($nsTextFieldCellPtr);
    }
}

if (! function_exists('ns_textfieldcell_destroy')) {
    function ns_textfieldcell_destroy(int $cell): void
    {
        NSTextFieldCell::destroy($cell);
    }
}

if (! function_exists('ns_textfieldcell_nstextfieldcell')) {
    function ns_textfieldcell_nstextfieldcell(int $cell): int
    {
        return NSTextFieldCell::nsTextFieldCell($cell);
    }
}

if (! function_exists('ns_textfieldcell_set_title')) {
    function ns_textfieldcell_set_title(int $cell, string $title): void
    {
        NSTextFieldCell::setTitle($cell, $title);
    }
}

if (! function_exists('ns_textfieldcell_get_title')) {
    function ns_textfieldcell_get_title(int $cell): string
    {
        return NSTextFieldCell::getTitle($cell);
    }
}

if (! function_exists('ns_textfieldcell_set_string')) {
    function ns_textfieldcell_set_string(int $cell, string $value): void
    {
        NSTextFieldCell::setStringValue($cell, $value);
    }
}

if (! function_exists('ns_textfieldcell_get_string')) {
    function ns_textfieldcell_get_string(int $cell): string
    {
        return NSTextFieldCell::getStringValue($cell);
    }
}

if (! function_exists('ns_textfieldcell_set_background_color')) {
    function ns_textfieldcell_set_background_color(int $cell, int $color): void
    {
        NSTextFieldCell::setBackgroundColor($cell, $color);
    }
}

if (! function_exists('ns_textfieldcell_set_draws_background')) {
    function ns_textfieldcell_set_draws_background(int $cell, bool $drawsBackground): void
    {
        NSTextFieldCell::setDrawsBackground($cell, $drawsBackground);
    }
}

if (! function_exists('ns_textfieldcell_draws_background')) {
    function ns_textfieldcell_draws_background(int $cell): bool
    {
        return NSTextFieldCell::drawsBackground($cell);
    }
}

if (! function_exists('ns_textfieldcell_set_text_color')) {
    function ns_textfieldcell_set_text_color(int $cell, int $color): void
    {
        NSTextFieldCell::setTextColor($cell, $color);
    }
}

if (! function_exists('ns_textfieldcell_set_bezel_style')) {
    function ns_textfieldcell_set_bezel_style(int $cell, int $style): void
    {
        NSTextFieldCell::setBezelStyle($cell, $style);
    }
}

if (! function_exists('ns_textfieldcell_get_bezel_style')) {
    function ns_textfieldcell_get_bezel_style(int $cell): int
    {
        return NSTextFieldCell::getBezelStyle($cell);
    }
}

if (! function_exists('ns_textfieldcell_set_placeholder_string')) {
    function ns_textfieldcell_set_placeholder_string(int $cell, string $placeholder): void
    {
        NSTextFieldCell::setPlaceholderString($cell, $placeholder);
    }
}

if (! function_exists('ns_textfieldcell_get_placeholder_string')) {
    function ns_textfieldcell_get_placeholder_string(int $cell): string
    {
        return NSTextFieldCell::getPlaceholderString($cell);
    }
}

if (! function_exists('ns_textfieldcell_set_wants_notification_for_marked_text')) {
    function ns_textfieldcell_set_wants_notification_for_marked_text(int $cell, bool $flag): void
    {
        NSTextFieldCell::setWantsNotificationForMarkedText($cell, $flag);
    }
}
