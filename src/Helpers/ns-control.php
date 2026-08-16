<?php

use AppKit\NS\NSControl\NSControl;
use Microscrap\Bindings\AppKit\Enums\TextAlignment;

/*
| NSControl helpers — 1:1 over AppKit\NS\NSControl\NSControl
| `control` is a view-box handle from any NSControl subclass.
*/

if (! function_exists('ns_control_set_enabled')) {
    function ns_control_set_enabled(int $control, bool $enabled): void
    {
        NSControl::setEnabled($control, $enabled);
    }
}

if (! function_exists('ns_control_is_enabled')) {
    function ns_control_is_enabled(int $control): bool
    {
        return NSControl::isEnabled($control);
    }
}

if (! function_exists('ns_control_set_string')) {
    function ns_control_set_string(int $control, string $value): void
    {
        NSControl::setStringValue($control, $value);
    }
}

if (! function_exists('ns_control_get_string')) {
    function ns_control_get_string(int $control): string
    {
        return NSControl::getStringValue($control);
    }
}

if (! function_exists('ns_control_set_int_value')) {
    function ns_control_set_int_value(int $control, int $value): void
    {
        NSControl::setIntValue($control, $value);
    }
}

if (! function_exists('ns_control_get_int_value')) {
    function ns_control_get_int_value(int $control): int
    {
        return NSControl::getIntValue($control);
    }
}

if (! function_exists('ns_control_set_tag')) {
    function ns_control_set_tag(int $control, int $tag): void
    {
        NSControl::setTag($control, $tag);
    }
}

if (! function_exists('ns_control_get_tag')) {
    function ns_control_get_tag(int $control): int
    {
        return NSControl::getTag($control);
    }
}

if (! function_exists('ns_control_perform_click')) {
    function ns_control_perform_click(int $control): void
    {
        NSControl::performClick($control);
    }
}

if (! function_exists('ns_control_set_continuous')) {
    function ns_control_set_continuous(int $control, bool $continuous): void
    {
        NSControl::setContinuous($control, $continuous);
    }
}

if (! function_exists('ns_control_is_continuous')) {
    function ns_control_is_continuous(int $control): bool
    {
        return NSControl::isContinuous($control);
    }
}

if (! function_exists('ns_control_set_state')) {
    function ns_control_set_state(int $control, int $state): void
    {
        NSControl::setState($control, $state);
    }
}

if (! function_exists('ns_control_get_state')) {
    function ns_control_get_state(int $control): int
    {
        return NSControl::getState($control);
    }
}

if (! function_exists('ns_control_set_control_size')) {
    function ns_control_set_control_size(int $control, int $size): void
    {
        NSControl::setControlSize($control, $size);
    }
}

if (! function_exists('ns_control_get_control_size')) {
    function ns_control_get_control_size(int $control): int
    {
        return NSControl::getControlSize($control);
    }
}

if (! function_exists('ns_control_set_alignment')) {
    function ns_control_set_alignment(int $control, TextAlignment|int $alignment): void
    {
        NSControl::setAlignment(
            $control,
            $alignment instanceof TextAlignment ? $alignment->value : $alignment
        );
    }
}
