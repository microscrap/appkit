<?php

use AppKit\NS\NSColorPicker\NSColorPicker;

/*
| NSColorPicker helpers — 1:1 over AppKit\NS\NSColorPicker\NSColorPicker
*/

if (! function_exists('ns_colorpicker_wrap')) {
    function ns_colorpicker_wrap(int $nsColorPickerPtr): int
    {
        return NSColorPicker::wrap($nsColorPickerPtr);
    }
}

if (! function_exists('ns_colorpicker_destroy')) {
    function ns_colorpicker_destroy(int $picker): void
    {
        NSColorPicker::destroy($picker);
    }
}

if (! function_exists('ns_colorpicker_create')) {
    function ns_colorpicker_create(int $mask, int $panel = 0): int
    {
        return NSColorPicker::create($mask, $panel);
    }
}

if (! function_exists('ns_colorpicker_color_panel')) {
    function ns_colorpicker_color_panel(int $picker): int
    {
        return NSColorPicker::colorPanel($picker);
    }
}

if (! function_exists('ns_colorpicker_button_tool_tip')) {
    function ns_colorpicker_button_tool_tip(int $picker): string
    {
        return NSColorPicker::buttonToolTip($picker);
    }
}

if (! function_exists('ns_colorpicker_min_content_size')) {
    function ns_colorpicker_min_content_size(int $picker): array
    {
        return NSColorPicker::minContentSize($picker);
    }
}

if (! function_exists('ns_colorpicker_set_mode')) {
    function ns_colorpicker_set_mode(int $picker, int $mode): void
    {
        NSColorPicker::setMode($picker, $mode);
    }
}

if (! function_exists('ns_colorpicker_attach_color_list')) {
    function ns_colorpicker_attach_color_list(int $picker, int $list): void
    {
        NSColorPicker::attachColorList($picker, $list);
    }
}

if (! function_exists('ns_colorpicker_detach_color_list')) {
    function ns_colorpicker_detach_color_list(int $picker, int $list): void
    {
        NSColorPicker::detachColorList($picker, $list);
    }
}

if (! function_exists('ns_colorpicker_nscolorpicker')) {
    function ns_colorpicker_nscolorpicker(int $picker): int
    {
        return NSColorPicker::nsColorPicker($picker);
    }
}
