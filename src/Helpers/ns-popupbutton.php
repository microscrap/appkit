<?php

use AppKit\NS\NSPopUpButton\NSPopUpButton;

/*
| NSPopUpButton helpers — 1:1 over AppKit\NS\NSPopUpButton\NSPopUpButton
*/

if (! function_exists('ns_popupbutton_create')) {
    function ns_popupbutton_create(int $x, int $y, int $width, int $height): int
    {
        return NSPopUpButton::create($x, $y, $width, $height);
    }
}

if (! function_exists('ns_popupbutton_destroy')) {
    function ns_popupbutton_destroy(int $popup): void
    {
        NSPopUpButton::destroy($popup);
    }
}

if (! function_exists('ns_popupbutton_add_item')) {
    function ns_popupbutton_add_item(int $popup, string $title): void
    {
        NSPopUpButton::addItem($popup, $title);
    }
}

if (! function_exists('ns_popupbutton_remove_all')) {
    function ns_popupbutton_remove_all(int $popup): void
    {
        NSPopUpButton::removeAll($popup);
    }
}

if (! function_exists('ns_popupbutton_count')) {
    function ns_popupbutton_count(int $popup): int
    {
        return NSPopUpButton::count($popup);
    }
}

if (! function_exists('ns_popupbutton_set_selected')) {
    function ns_popupbutton_set_selected(int $popup, int $index): void
    {
        NSPopUpButton::setSelected($popup, $index);
    }
}

if (! function_exists('ns_popupbutton_get_selected')) {
    function ns_popupbutton_get_selected(int $popup): int
    {
        return NSPopUpButton::getSelected($popup);
    }
}

if (! function_exists('ns_popupbutton_get_selected_title')) {
    function ns_popupbutton_get_selected_title(int $popup): string
    {
        return NSPopUpButton::getSelectedTitle($popup);
    }
}

if (! function_exists('ns_popupbutton_poll_change')) {
    function ns_popupbutton_poll_change(int $popup): bool
    {
        return NSPopUpButton::pollChange($popup);
    }
}
