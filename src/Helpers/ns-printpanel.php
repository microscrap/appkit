<?php

use AppKit\NS\NSPrintPanel\NSPrintPanel;

/*
| NSPrintPanel helpers — 1:1 over AppKit\NS\NSPrintPanel\NSPrintPanel
*/

if (! function_exists('ns_printpanel_wrap')) {
    function ns_printpanel_wrap(int $nsPrintPanelPtr): int
    {
        return NSPrintPanel::wrap($nsPrintPanelPtr);
    }
}

if (! function_exists('ns_printpanel_destroy')) {
    function ns_printpanel_destroy(int $panel): void
    {
        NSPrintPanel::destroy($panel);
    }
}

if (! function_exists('ns_printpanel_nsprintpanel')) {
    function ns_printpanel_nsprintpanel(int $panel): int
    {
        return NSPrintPanel::nsPrintPanel($panel);
    }
}

if (! function_exists('ns_printpanel_print_panel')) {
    function ns_printpanel_print_panel(): int
    {
        return NSPrintPanel::printPanel();
    }
}

if (! function_exists('ns_printpanel_options')) {
    function ns_printpanel_options(int $panel): int
    {
        return NSPrintPanel::options($panel);
    }
}

if (! function_exists('ns_printpanel_set_options')) {
    function ns_printpanel_set_options(int $panel, int $options): void
    {
        NSPrintPanel::setOptions($panel, $options);
    }
}

if (! function_exists('ns_printpanel_default_button_title')) {
    function ns_printpanel_default_button_title(int $panel): string
    {
        return NSPrintPanel::defaultButtonTitle($panel);
    }
}

if (! function_exists('ns_printpanel_set_default_button_title')) {
    function ns_printpanel_set_default_button_title(int $panel, string $title = ''): void
    {
        NSPrintPanel::setDefaultButtonTitle($panel, $title);
    }
}

if (! function_exists('ns_printpanel_help_anchor')) {
    function ns_printpanel_help_anchor(int $panel): string
    {
        return NSPrintPanel::helpAnchor($panel);
    }
}

if (! function_exists('ns_printpanel_set_help_anchor')) {
    function ns_printpanel_set_help_anchor(int $panel, string $anchor = ''): void
    {
        NSPrintPanel::setHelpAnchor($panel, $anchor);
    }
}

if (! function_exists('ns_printpanel_job_style_hint')) {
    function ns_printpanel_job_style_hint(int $panel): string
    {
        return NSPrintPanel::jobStyleHint($panel);
    }
}

if (! function_exists('ns_printpanel_set_job_style_hint')) {
    function ns_printpanel_set_job_style_hint(int $panel, string $hint = ''): void
    {
        NSPrintPanel::setJobStyleHint($panel, $hint);
    }
}

if (! function_exists('ns_printpanel_run_modal')) {
    function ns_printpanel_run_modal(int $panel): int
    {
        return NSPrintPanel::runModal($panel);
    }
}

if (! function_exists('ns_printpanel_run_modal_with_print_info')) {
    function ns_printpanel_run_modal_with_print_info(int $panel, int $printInfo = 0): int
    {
        return NSPrintPanel::runModalWithPrintInfo($panel, $printInfo);
    }
}

if (! function_exists('ns_printpanel_print_info')) {
    function ns_printpanel_print_info(int $panel): int
    {
        return NSPrintPanel::printInfo($panel);
    }
}

if (! function_exists('ns_printpanel_add_accessory_controller')) {
    function ns_printpanel_add_accessory_controller(int $panel, int $controller): void
    {
        NSPrintPanel::addAccessoryController($panel, $controller);
    }
}

if (! function_exists('ns_printpanel_remove_accessory_controller')) {
    function ns_printpanel_remove_accessory_controller(int $panel, int $controller): void
    {
        NSPrintPanel::removeAccessoryController($panel, $controller);
    }
}

if (! function_exists('ns_printpanel_accessory_controller_count')) {
    function ns_printpanel_accessory_controller_count(int $panel): int
    {
        return NSPrintPanel::accessoryControllerCount($panel);
    }
}
