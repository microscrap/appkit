<?php

use AppKit\NS\NSButton\NSButton;

/*
| NSButton helpers — 1:1 over AppKit\NS\NSButton\NSButton
*/

if (! function_exists('ns_button_create')) {
    function ns_button_create(int $x, int $y, int $width, int $height, string $title): int
    {
        return NSButton::create($x, $y, $width, $height, $title);
    }
}

if (! function_exists('ns_button_create_checkbox')) {
    function ns_button_create_checkbox(int $x, int $y, int $width, int $height, string $title): int
    {
        return NSButton::createCheckbox($x, $y, $width, $height, $title);
    }
}

if (! function_exists('ns_button_create_radio')) {
    function ns_button_create_radio(int $x, int $y, int $width, int $height, string $title): int
    {
        return NSButton::createRadio($x, $y, $width, $height, $title);
    }
}

if (! function_exists('ns_button_destroy')) {
    function ns_button_destroy(int $button): void
    {
        NSButton::destroy($button);
    }
}

if (! function_exists('ns_button_set_title')) {
    function ns_button_set_title(int $button, string $title): void
    {
        NSButton::setTitle($button, $title);
    }
}

if (! function_exists('ns_button_set_checked')) {
    function ns_button_set_checked(int $button, bool $checked): void
    {
        NSButton::setChecked($button, $checked);
    }
}

if (! function_exists('ns_button_is_checked')) {
    function ns_button_is_checked(int $button): bool
    {
        return NSButton::isChecked($button);
    }
}

if (! function_exists('ns_button_set_selected')) {
    function ns_button_set_selected(int $button, bool $selected): void
    {
        NSButton::setSelected($button, $selected);
    }
}

if (! function_exists('ns_button_is_selected')) {
    function ns_button_is_selected(int $button): bool
    {
        return NSButton::isSelected($button);
    }
}

if (! function_exists('ns_button_poll_click')) {
    function ns_button_poll_click(int $button): bool
    {
        return NSButton::pollClick($button);
    }
}
