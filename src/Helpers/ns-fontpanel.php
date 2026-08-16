<?php

use AppKit\NS\NSFontPanel\NSFontPanel;

/*
| NSFontPanel helpers — 1:1 over AppKit\NS\NSFontPanel\NSFontPanel
*/

if (! function_exists('ns_fontpanel_wrap')) {
    function ns_fontpanel_wrap(int $nsFontPanelPtr): int
    {
        return NSFontPanel::wrap($nsFontPanelPtr);
    }
}

if (! function_exists('ns_fontpanel_shared')) {
    function ns_fontpanel_shared(): int
    {
        return NSFontPanel::shared();
    }
}

if (! function_exists('ns_fontpanel_destroy')) {
    function ns_fontpanel_destroy(int $panel): void
    {
        NSFontPanel::destroy($panel);
    }
}

if (! function_exists('ns_fontpanel_shared_exists')) {
    function ns_fontpanel_shared_exists(): bool
    {
        return NSFontPanel::sharedExists();
    }
}

if (! function_exists('ns_fontpanel_set_panel_font')) {
    function ns_fontpanel_set_panel_font(int $panel, int $font, bool $isMultiple = false): void
    {
        NSFontPanel::setPanelFont($panel, $font, $isMultiple);
    }
}

if (! function_exists('ns_fontpanel_panel_convert_font')) {
    function ns_fontpanel_panel_convert_font(int $panel, int $font): int
    {
        return NSFontPanel::panelConvertFont($panel, $font);
    }
}

if (! function_exists('ns_fontpanel_works_when_modal')) {
    function ns_fontpanel_works_when_modal(int $panel): bool
    {
        return NSFontPanel::worksWhenModal($panel);
    }
}

if (! function_exists('ns_fontpanel_set_works_when_modal')) {
    function ns_fontpanel_set_works_when_modal(int $panel, bool $works): void
    {
        NSFontPanel::setWorksWhenModal($panel, $works);
    }
}

if (! function_exists('ns_fontpanel_is_enabled')) {
    function ns_fontpanel_is_enabled(int $panel): bool
    {
        return NSFontPanel::isEnabled($panel);
    }
}

if (! function_exists('ns_fontpanel_set_enabled')) {
    function ns_fontpanel_set_enabled(int $panel, bool $enabled): void
    {
        NSFontPanel::setEnabled($panel, $enabled);
    }
}

if (! function_exists('ns_fontpanel_reload_default_font_families')) {
    function ns_fontpanel_reload_default_font_families(int $panel): void
    {
        NSFontPanel::reloadDefaultFontFamilies($panel);
    }
}

if (! function_exists('ns_fontpanel_order_front')) {
    function ns_fontpanel_order_front(int $panel): void
    {
        NSFontPanel::orderFront($panel);
    }
}

if (! function_exists('ns_fontpanel_nsfontpanel')) {
    function ns_fontpanel_nsfontpanel(int $panel): int
    {
        return NSFontPanel::nsFontPanel($panel);
    }
}
