<?php

use AppKit\NS\NSPageLayout\NSPageLayout;

/*
| NSPageLayout helpers — 1:1 over AppKit\NS\NSPageLayout\NSPageLayout
*/

if (! function_exists('ns_pagelayout_page_layout')) {
    function ns_pagelayout_page_layout(): int
    {
        return NSPageLayout::pageLayout();
    }
}

if (! function_exists('ns_pagelayout_destroy')) {
    function ns_pagelayout_destroy(int $layout): void
    {
        NSPageLayout::destroy($layout);
    }
}

if (! function_exists('ns_pagelayout_nspagelayout')) {
    function ns_pagelayout_nspagelayout(int $layout): int
    {
        return NSPageLayout::nsPageLayout($layout);
    }
}

if (! function_exists('ns_pagelayout_run_modal')) {
    function ns_pagelayout_run_modal(int $layout): int
    {
        return NSPageLayout::runModal($layout);
    }
}

if (! function_exists('ns_pagelayout_run_modal_with_print_info')) {
    function ns_pagelayout_run_modal_with_print_info(int $layout, int $printInfo = 0): int
    {
        return NSPageLayout::runModalWithPrintInfo($layout, $printInfo);
    }
}

if (! function_exists('ns_pagelayout_print_info')) {
    function ns_pagelayout_print_info(int $layout): int
    {
        return NSPageLayout::printInfo($layout);
    }
}

if (! function_exists('ns_pagelayout_add_accessory_controller')) {
    function ns_pagelayout_add_accessory_controller(int $layout, int $controller): void
    {
        NSPageLayout::addAccessoryController($layout, $controller);
    }
}

if (! function_exists('ns_pagelayout_remove_accessory_controller')) {
    function ns_pagelayout_remove_accessory_controller(int $layout, int $controller): void
    {
        NSPageLayout::removeAccessoryController($layout, $controller);
    }
}

if (! function_exists('ns_pagelayout_accessory_controller_count')) {
    function ns_pagelayout_accessory_controller_count(int $layout): int
    {
        return NSPageLayout::accessoryControllerCount($layout);
    }
}
