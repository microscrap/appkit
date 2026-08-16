<?php

use AppKit\NS\NSColorPickerTouchBarItem\NSColorPickerTouchBarItem;

/*
| NSColorPickerTouchBarItem helpers — 1:1 over AppKit\NS\NSColorPickerTouchBarItem\NSColorPickerTouchBarItem
*/

if (! function_exists('ns_colorpickertouchbaritem_color_picker')) {
    function ns_colorpickertouchbaritem_color_picker(string $identifier): int
    {
        return NSColorPickerTouchBarItem::colorPicker($identifier);
    }
}

if (! function_exists('ns_colorpickertouchbaritem_text_color_picker')) {
    function ns_colorpickertouchbaritem_text_color_picker(string $identifier): int
    {
        return NSColorPickerTouchBarItem::textColorPicker($identifier);
    }
}

if (! function_exists('ns_colorpickertouchbaritem_stroke_color_picker')) {
    function ns_colorpickertouchbaritem_stroke_color_picker(string $identifier): int
    {
        return NSColorPickerTouchBarItem::strokeColorPicker($identifier);
    }
}

if (! function_exists('ns_colorpickertouchbaritem_color_picker_with_button_image')) {
    function ns_colorpickertouchbaritem_color_picker_with_button_image(string $identifier, int $image): int
    {
        return NSColorPickerTouchBarItem::colorPickerWithButtonImage($identifier, $image);
    }
}

if (! function_exists('ns_colorpickertouchbaritem_wrap')) {
    function ns_colorpickertouchbaritem_wrap(int $ptr): int
    {
        return NSColorPickerTouchBarItem::wrap($ptr);
    }
}

if (! function_exists('ns_colorpickertouchbaritem_destroy')) {
    function ns_colorpickertouchbaritem_destroy(int $item): void
    {
        NSColorPickerTouchBarItem::destroy($item);
    }
}

if (! function_exists('ns_colorpickertouchbaritem_nscolorpickertouchbaritem')) {
    function ns_colorpickertouchbaritem_nscolorpickertouchbaritem(int $item): int
    {
        return NSColorPickerTouchBarItem::nsColorPickerTouchBarItem($item);
    }
}

if (! function_exists('ns_colorpickertouchbaritem_set_color')) {
    function ns_colorpickertouchbaritem_set_color(int $item, int $color): void
    {
        NSColorPickerTouchBarItem::setColor($item, $color);
    }
}

if (! function_exists('ns_colorpickertouchbaritem_get_color')) {
    function ns_colorpickertouchbaritem_get_color(int $item): int
    {
        return NSColorPickerTouchBarItem::getColor($item);
    }
}

if (! function_exists('ns_colorpickertouchbaritem_poll_action')) {
    function ns_colorpickertouchbaritem_poll_action(int $item): bool
    {
        return NSColorPickerTouchBarItem::pollAction($item);
    }
}
