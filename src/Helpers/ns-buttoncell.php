<?php

use AppKit\NS\NSButtonCell\NSButtonCell;

/*
| NSButtonCell helpers — 1:1 over AppKit\NS\NSButtonCell\NSButtonCell
*/

if (! function_exists('ns_buttoncell_create_text')) {
    function ns_buttoncell_create_text(string $value = ''): int
    {
        return NSButtonCell::createText($value);
    }
}

if (! function_exists('ns_buttoncell_create_image')) {
    function ns_buttoncell_create_image(int $image): int
    {
        return NSButtonCell::createImage($image);
    }
}

if (! function_exists('ns_buttoncell_wrap')) {
    function ns_buttoncell_wrap(int $nsButtonCellPtr): int
    {
        return NSButtonCell::wrap($nsButtonCellPtr);
    }
}

if (! function_exists('ns_buttoncell_destroy')) {
    function ns_buttoncell_destroy(int $cell): void
    {
        NSButtonCell::destroy($cell);
    }
}

if (! function_exists('ns_buttoncell_nsbuttoncell')) {
    function ns_buttoncell_nsbuttoncell(int $cell): int
    {
        return NSButtonCell::nsButtonCell($cell);
    }
}

if (! function_exists('ns_buttoncell_set_title')) {
    function ns_buttoncell_set_title(int $cell, string $title): void
    {
        NSButtonCell::setTitle($cell, $title);
    }
}

if (! function_exists('ns_buttoncell_get_title')) {
    function ns_buttoncell_get_title(int $cell): string
    {
        return NSButtonCell::getTitle($cell);
    }
}

if (! function_exists('ns_buttoncell_set_state')) {
    function ns_buttoncell_set_state(int $cell, int $state): void
    {
        NSButtonCell::setState($cell, $state);
    }
}

if (! function_exists('ns_buttoncell_get_state')) {
    function ns_buttoncell_get_state(int $cell): int
    {
        return NSButtonCell::getState($cell);
    }
}

if (! function_exists('ns_buttoncell_set_enabled')) {
    function ns_buttoncell_set_enabled(int $cell, bool $enabled): void
    {
        NSButtonCell::setEnabled($cell, $enabled);
    }
}

if (! function_exists('ns_buttoncell_is_enabled')) {
    function ns_buttoncell_is_enabled(int $cell): bool
    {
        return NSButtonCell::isEnabled($cell);
    }
}

if (! function_exists('ns_buttoncell_set_tag')) {
    function ns_buttoncell_set_tag(int $cell, int $tag): void
    {
        NSButtonCell::setTag($cell, $tag);
    }
}

if (! function_exists('ns_buttoncell_get_tag')) {
    function ns_buttoncell_get_tag(int $cell): int
    {
        return NSButtonCell::getTag($cell);
    }
}

if (! function_exists('ns_buttoncell_set_bezel_style')) {
    function ns_buttoncell_set_bezel_style(int $cell, int $style): void
    {
        NSButtonCell::setBezelStyle($cell, $style);
    }
}

if (! function_exists('ns_buttoncell_get_bezel_style')) {
    function ns_buttoncell_get_bezel_style(int $cell): int
    {
        return NSButtonCell::getBezelStyle($cell);
    }
}

if (! function_exists('ns_buttoncell_set_button_type')) {
    function ns_buttoncell_set_button_type(int $cell, int $type): void
    {
        NSButtonCell::setButtonType($cell, $type);
    }
}

if (! function_exists('ns_buttoncell_set_alternate_title')) {
    function ns_buttoncell_set_alternate_title(int $cell, string $title): void
    {
        NSButtonCell::setAlternateTitle($cell, $title);
    }
}

if (! function_exists('ns_buttoncell_get_alternate_title')) {
    function ns_buttoncell_get_alternate_title(int $cell): string
    {
        return NSButtonCell::getAlternateTitle($cell);
    }
}

if (! function_exists('ns_buttoncell_set_key_equivalent')) {
    function ns_buttoncell_set_key_equivalent(int $cell, string $key): void
    {
        NSButtonCell::setKeyEquivalent($cell, $key);
    }
}

if (! function_exists('ns_buttoncell_get_key_equivalent')) {
    function ns_buttoncell_get_key_equivalent(int $cell): string
    {
        return NSButtonCell::getKeyEquivalent($cell);
    }
}

if (! function_exists('ns_buttoncell_set_transparent')) {
    function ns_buttoncell_set_transparent(int $cell, bool $flag): void
    {
        NSButtonCell::setTransparent($cell, $flag);
    }
}

if (! function_exists('ns_buttoncell_is_transparent')) {
    function ns_buttoncell_is_transparent(int $cell): bool
    {
        return NSButtonCell::isTransparent($cell);
    }
}

if (! function_exists('ns_buttoncell_set_image_dims_when_disabled')) {
    function ns_buttoncell_set_image_dims_when_disabled(int $cell, bool $flag): void
    {
        NSButtonCell::setImageDimsWhenDisabled($cell, $flag);
    }
}

if (! function_exists('ns_buttoncell_image_dims_when_disabled')) {
    function ns_buttoncell_image_dims_when_disabled(int $cell): bool
    {
        return NSButtonCell::imageDimsWhenDisabled($cell);
    }
}

if (! function_exists('ns_buttoncell_perform_click')) {
    function ns_buttoncell_perform_click(int $cell): void
    {
        NSButtonCell::performClick($cell);
    }
}
