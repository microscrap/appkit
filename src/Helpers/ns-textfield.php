<?php

use AppKit\NS\NSTextField\NSTextField;

/*
| NSTextField helpers — 1:1 over AppKit\NS\NSTextField\NSTextField
*/

if (! function_exists('ns_textfield_create')) {
    function ns_textfield_create(int $x, int $y, int $width, int $height, string $value = ''): int
    {
        return NSTextField::create($x, $y, $width, $height, $value);
    }
}

if (! function_exists('ns_label_create')) {
    function ns_label_create(int $x, int $y, int $width, int $height, string $value = ''): int
    {
        return NSTextField::createLabel($x, $y, $width, $height, $value);
    }
}

if (! function_exists('ns_textfield_destroy')) {
    function ns_textfield_destroy(int $field): void
    {
        NSTextField::destroy($field);
    }
}

if (! function_exists('ns_label_destroy')) {
    function ns_label_destroy(int $label): void
    {
        NSTextField::destroyLabel($label);
    }
}

if (! function_exists('ns_textfield_set_string')) {
    function ns_textfield_set_string(int $field, string $value): void
    {
        NSTextField::setStringValue($field, $value);
    }
}

if (! function_exists('ns_textfield_get_string')) {
    function ns_textfield_get_string(int $field): string
    {
        return NSTextField::getStringValue($field);
    }
}

if (! function_exists('ns_textfield_set_editable')) {
    function ns_textfield_set_editable(int $field, bool $editable): void
    {
        NSTextField::setEditable($field, $editable);
    }
}

if (! function_exists('ns_textfield_poll_change')) {
    function ns_textfield_poll_change(int $field): bool
    {
        return NSTextField::pollChange($field);
    }
}
