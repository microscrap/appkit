<?php

use AppKit\NS\NSColorPanel\NSColorPanel;

/*
| NSColorPanel helpers — 1:1 over AppKit\NS\NSColorPanel\NSColorPanel
*/

if (! function_exists('ns_colorpanel_shared')) {
    function ns_colorpanel_shared(): int
    {
        return NSColorPanel::shared();
    }
}

if (! function_exists('ns_colorpanel_destroy')) {
    function ns_colorpanel_destroy(int $panel): void
    {
        NSColorPanel::destroy($panel);
    }
}

if (! function_exists('ns_colorpanel_shared_exists')) {
    function ns_colorpanel_shared_exists(): bool
    {
        return NSColorPanel::sharedExists();
    }
}

if (! function_exists('ns_colorpanel_set_picker_mask')) {
    function ns_colorpanel_set_picker_mask(int $mask): void
    {
        NSColorPanel::setPickerMask($mask);
    }
}

if (! function_exists('ns_colorpanel_set_picker_mode')) {
    function ns_colorpanel_set_picker_mode(int $mode): void
    {
        NSColorPanel::setPickerMode($mode);
    }
}

if (! function_exists('ns_colorpanel_order_front')) {
    function ns_colorpanel_order_front(): void
    {
        NSColorPanel::orderFront();
    }
}

if (! function_exists('ns_colorpanel_mode')) {
    function ns_colorpanel_mode(int $panel): int
    {
        return NSColorPanel::mode($panel);
    }
}

if (! function_exists('ns_colorpanel_set_mode')) {
    function ns_colorpanel_set_mode(int $panel, int $mode): void
    {
        NSColorPanel::setMode($panel, $mode);
    }
}

if (! function_exists('ns_colorpanel_shows_alpha')) {
    function ns_colorpanel_shows_alpha(int $panel): bool
    {
        return NSColorPanel::showsAlpha($panel);
    }
}

if (! function_exists('ns_colorpanel_set_shows_alpha')) {
    function ns_colorpanel_set_shows_alpha(int $panel, bool $shows): void
    {
        NSColorPanel::setShowsAlpha($panel, $shows);
    }
}

if (! function_exists('ns_colorpanel_is_continuous')) {
    function ns_colorpanel_is_continuous(int $panel): bool
    {
        return NSColorPanel::isContinuous($panel);
    }
}

if (! function_exists('ns_colorpanel_set_continuous')) {
    function ns_colorpanel_set_continuous(int $panel, bool $continuous): void
    {
        NSColorPanel::setContinuous($panel, $continuous);
    }
}

if (! function_exists('ns_colorpanel_set_color_rgba')) {
    function ns_colorpanel_set_color_rgba(int $panel, int $r, int $g, int $b, int $a = 255): bool
    {
        return NSColorPanel::setColorRgba($panel, $r, $g, $b, $a);
    }
}

if (! function_exists('ns_colorpanel_get_color_rgba')) {
    function ns_colorpanel_get_color_rgba(int $panel): array
    {
        return NSColorPanel::getColorRgba($panel);
    }
}

if (! function_exists('ns_colorpanel_alpha')) {
    function ns_colorpanel_alpha(int $panel): float
    {
        return NSColorPanel::alpha($panel);
    }
}

if (! function_exists('ns_colorpanel_attach_color_list')) {
    function ns_colorpanel_attach_color_list(int $panel, int $list): void
    {
        NSColorPanel::attachColorList($panel, $list);
    }
}

if (! function_exists('ns_colorpanel_detach_color_list')) {
    function ns_colorpanel_detach_color_list(int $panel, int $list): void
    {
        NSColorPanel::detachColorList($panel, $list);
    }
}

if (! function_exists('ns_colorpanel_nscolorpanel')) {
    function ns_colorpanel_nscolorpanel(int $panel): int
    {
        return NSColorPanel::nsColorPanel($panel);
    }
}
