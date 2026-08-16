<?php

use AppKit\NS\NSPathControl\NSPathControl;

/*
| NSPathControl helpers — 1:1 over AppKit\NS\NSPathControl\NSPathControl
*/

if (! function_exists('ns_pathcontrol_create')) {
    function ns_pathcontrol_create(int $x, int $y, int $width, int $height): int
    {
        return NSPathControl::create($x, $y, $width, $height);
    }
}

if (! function_exists('ns_pathcontrol_destroy')) {
    function ns_pathcontrol_destroy(int $control): void
    {
        NSPathControl::destroy($control);
    }
}

if (! function_exists('ns_pathcontrol_set_url_path')) {
    function ns_pathcontrol_set_url_path(int $control, string $path): void
    {
        NSPathControl::setUrlPath($control, $path);
    }
}

if (! function_exists('ns_pathcontrol_get_url_path')) {
    function ns_pathcontrol_get_url_path(int $control): string
    {
        return NSPathControl::getUrlPath($control);
    }
}

if (! function_exists('ns_pathcontrol_set_path_style')) {
    function ns_pathcontrol_set_path_style(int $control, int $style): void
    {
        NSPathControl::setPathStyle($control, $style);
    }
}

if (! function_exists('ns_pathcontrol_get_path_style')) {
    function ns_pathcontrol_get_path_style(int $control): int
    {
        return NSPathControl::getPathStyle($control);
    }
}

if (! function_exists('ns_pathcontrol_set_editable')) {
    function ns_pathcontrol_set_editable(int $control, bool $flag): void
    {
        NSPathControl::setEditable($control, $flag);
    }
}

if (! function_exists('ns_pathcontrol_is_editable')) {
    function ns_pathcontrol_is_editable(int $control): bool
    {
        return NSPathControl::isEditable($control);
    }
}

if (! function_exists('ns_pathcontrol_set_placeholder_string')) {
    function ns_pathcontrol_set_placeholder_string(int $control, string $placeholder): void
    {
        NSPathControl::setPlaceholderString($control, $placeholder);
    }
}

if (! function_exists('ns_pathcontrol_get_placeholder_string')) {
    function ns_pathcontrol_get_placeholder_string(int $control): string
    {
        return NSPathControl::getPlaceholderString($control);
    }
}

if (! function_exists('ns_pathcontrol_set_background_color')) {
    function ns_pathcontrol_set_background_color(int $control, int $color): void
    {
        NSPathControl::setBackgroundColor($control, $color);
    }
}

if (! function_exists('ns_pathcontrol_set_allowed_types')) {
    function ns_pathcontrol_set_allowed_types(int $control, array $types): void
    {
        NSPathControl::setAllowedTypes($control, $types);
    }
}

if (! function_exists('ns_pathcontrol_poll_change')) {
    function ns_pathcontrol_poll_change(int $control): bool
    {
        return NSPathControl::pollChange($control);
    }
}
