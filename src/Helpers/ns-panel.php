<?php

use AppKit\NS\NSPanel\NSPanel;

/*
| NSPanel helpers — 1:1 over AppKit\NS\NSPanel\NSPanel
*/

if (! function_exists('ns_panel_create')) {
    function ns_panel_create(string $title, int $width, int $height): int
    {
        return NSPanel::create($title, $width, $height);
    }
}

if (! function_exists('ns_panel_destroy')) {
    function ns_panel_destroy(int $panel): void
    {
        NSPanel::destroy($panel);
    }
}

if (! function_exists('ns_panel_set_title')) {
    function ns_panel_set_title(int $panel, string $title): void
    {
        NSPanel::setTitle($panel, $title);
    }
}

if (! function_exists('ns_panel_show')) {
    function ns_panel_show(int $panel): void
    {
        NSPanel::show($panel);
    }
}

if (! function_exists('ns_panel_hide')) {
    function ns_panel_hide(int $panel): void
    {
        NSPanel::hide($panel);
    }
}

if (! function_exists('ns_panel_center')) {
    function ns_panel_center(int $panel): void
    {
        NSPanel::center($panel);
    }
}

if (! function_exists('ns_panel_should_close')) {
    function ns_panel_should_close(int $panel): bool
    {
        return NSPanel::shouldClose($panel);
    }
}

if (! function_exists('ns_panel_get_width')) {
    function ns_panel_get_width(int $panel): int
    {
        return NSPanel::getWidth($panel);
    }
}

if (! function_exists('ns_panel_get_height')) {
    function ns_panel_get_height(int $panel): int
    {
        return NSPanel::getHeight($panel);
    }
}

if (! function_exists('ns_panel_content_view')) {
    function ns_panel_content_view(int $panel): int
    {
        return NSPanel::contentView($panel);
    }
}

if (! function_exists('ns_panel_set_content_view')) {
    function ns_panel_set_content_view(int $panel, int $view): bool
    {
        return NSPanel::setContentView($panel, $view);
    }
}

if (! function_exists('ns_panel_make_first_responder')) {
    function ns_panel_make_first_responder(int $panel, int $view): bool
    {
        return NSPanel::makeFirstResponder($panel, $view);
    }
}

if (! function_exists('ns_panel_screen_to_content')) {
    function ns_panel_screen_to_content(int $panel, float $screenX, float $screenY): array
    {
        return NSPanel::screenToContent($panel, $screenX, $screenY);
    }
}

if (! function_exists('ns_panel_set_floating_panel')) {
    function ns_panel_set_floating_panel(int $panel, bool $floating): void
    {
        NSPanel::setFloatingPanel($panel, $floating);
    }
}

if (! function_exists('ns_panel_is_floating_panel')) {
    function ns_panel_is_floating_panel(int $panel): bool
    {
        return NSPanel::isFloatingPanel($panel);
    }
}

if (! function_exists('ns_panel_set_becomes_key_only_if_needed')) {
    function ns_panel_set_becomes_key_only_if_needed(int $panel, bool $flag): void
    {
        NSPanel::setBecomesKeyOnlyIfNeeded($panel, $flag);
    }
}

if (! function_exists('ns_panel_becomes_key_only_if_needed')) {
    function ns_panel_becomes_key_only_if_needed(int $panel): bool
    {
        return NSPanel::becomesKeyOnlyIfNeeded($panel);
    }
}

if (! function_exists('ns_panel_set_works_when_modal')) {
    function ns_panel_set_works_when_modal(int $panel, bool $flag): void
    {
        NSPanel::setWorksWhenModal($panel, $flag);
    }
}

if (! function_exists('ns_panel_works_when_modal')) {
    function ns_panel_works_when_modal(int $panel): bool
    {
        return NSPanel::worksWhenModal($panel);
    }
}

if (! function_exists('ns_panel_nspanel')) {
    function ns_panel_nspanel(int $panel): int
    {
        return NSPanel::nsPanel($panel);
    }
}
