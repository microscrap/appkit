<?php

use AppKit\NS\NSComboButton\NSComboButton;
use Microscrap\Bindings\AppKit\Enums\ComboButtonStyle;

/*
| NSComboButton helpers — 1:1 over AppKit\NS\NSComboButton\NSComboButton
*/

if (! function_exists('ns_combobutton_create_with_title')) {
    function ns_combobutton_create_with_title(int $x, int $y, int $width, int $height, string $title = '', int $menuHandle = 0): int
    {
        return NSComboButton::createWithTitle($x, $y, $width, $height, $title, $menuHandle);
    }
}

if (! function_exists('ns_combobutton_destroy')) {
    function ns_combobutton_destroy(int $button): void
    {
        NSComboButton::destroy($button);
    }
}

if (! function_exists('ns_combobutton_set_title')) {
    function ns_combobutton_set_title(int $button, string $title): void
    {
        NSComboButton::setTitle($button, $title);
    }
}

if (! function_exists('ns_combobutton_get_title')) {
    function ns_combobutton_get_title(int $button): string
    {
        return NSComboButton::getTitle($button);
    }
}

if (! function_exists('ns_combobutton_set_image')) {
    function ns_combobutton_set_image(int $button, int $imageHandle): void
    {
        NSComboButton::setImage($button, $imageHandle);
    }
}

if (! function_exists('ns_combobutton_set_menu')) {
    function ns_combobutton_set_menu(int $button, int $menuHandle): void
    {
        NSComboButton::setMenu($button, $menuHandle);
    }
}

if (! function_exists('ns_combobutton_get_menu')) {
    function ns_combobutton_get_menu(int $button): int
    {
        return NSComboButton::getMenu($button);
    }
}

if (! function_exists('ns_combobutton_set_style')) {
    function ns_combobutton_set_style(int $button, ComboButtonStyle|int $style): void
    {
        NSComboButton::setStyle($button, $style instanceof ComboButtonStyle ? $style->value : $style);
    }
}

if (! function_exists('ns_combobutton_get_style')) {
    function ns_combobutton_get_style(int $button): int
    {
        return NSComboButton::getStyle($button);
    }
}
