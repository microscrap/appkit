<?php

use AppKit\NS\NSComboBox\NSComboBox;

/*
| NSComboBox helpers — 1:1 over AppKit\NS\NSComboBox\NSComboBox
*/

if (! function_exists('ns_combobox_create')) {
    function ns_combobox_create(int $x, int $y, int $width, int $height): int
    {
        return NSComboBox::create($x, $y, $width, $height);
    }
}

if (! function_exists('ns_combobox_destroy')) {
    function ns_combobox_destroy(int $combo): void
    {
        NSComboBox::destroy($combo);
    }
}

if (! function_exists('ns_combobox_add_item')) {
    function ns_combobox_add_item(int $combo, string $title): void
    {
        NSComboBox::addItem($combo, $title);
    }
}

if (! function_exists('ns_combobox_remove_all')) {
    function ns_combobox_remove_all(int $combo): void
    {
        NSComboBox::removeAll($combo);
    }
}

if (! function_exists('ns_combobox_set_string')) {
    function ns_combobox_set_string(int $combo, string $value): void
    {
        NSComboBox::setStringValue($combo, $value);
    }
}

if (! function_exists('ns_combobox_get_string')) {
    function ns_combobox_get_string(int $combo): string
    {
        return NSComboBox::getStringValue($combo);
    }
}

if (! function_exists('ns_combobox_poll_change')) {
    function ns_combobox_poll_change(int $combo): bool
    {
        return NSComboBox::pollChange($combo);
    }
}
