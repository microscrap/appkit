<?php

use AppKit\NS\NSViewController\NSViewController;

/*
| NSViewController helpers — 1:1 over AppKit\NS\NSViewController\NSViewController
*/

if (! function_exists('ns_viewcontroller_create')) {
    function ns_viewcontroller_create(): int
    {
        return NSViewController::create();
    }
}

if (! function_exists('ns_viewcontroller_create_with_view')) {
    function ns_viewcontroller_create_with_view(int $view): int
    {
        return NSViewController::createWithView($view);
    }
}

if (! function_exists('ns_viewcontroller_wrap')) {
    function ns_viewcontroller_wrap(int $nsViewControllerPtr): int
    {
        return NSViewController::wrap($nsViewControllerPtr);
    }
}

if (! function_exists('ns_viewcontroller_destroy')) {
    function ns_viewcontroller_destroy(int $controller): void
    {
        NSViewController::destroy($controller);
    }
}

if (! function_exists('ns_viewcontroller_nsviewcontroller')) {
    function ns_viewcontroller_nsviewcontroller(int $controller): int
    {
        return NSViewController::nsViewController($controller);
    }
}

if (! function_exists('ns_viewcontroller_set_view')) {
    function ns_viewcontroller_set_view(int $controller, int $view): void
    {
        NSViewController::setView($controller, $view);
    }
}

if (! function_exists('ns_viewcontroller_view')) {
    function ns_viewcontroller_view(int $controller): int
    {
        return NSViewController::view($controller);
    }
}

if (! function_exists('ns_viewcontroller_set_title')) {
    function ns_viewcontroller_set_title(int $controller, string $title): void
    {
        NSViewController::setTitle($controller, $title);
    }
}

if (! function_exists('ns_viewcontroller_get_title')) {
    function ns_viewcontroller_get_title(int $controller): string
    {
        return NSViewController::getTitle($controller);
    }
}

if (! function_exists('ns_viewcontroller_is_view_loaded')) {
    function ns_viewcontroller_is_view_loaded(int $controller): bool
    {
        return NSViewController::isViewLoaded($controller);
    }
}

if (! function_exists('ns_viewcontroller_load_view_if_needed')) {
    function ns_viewcontroller_load_view_if_needed(int $controller): void
    {
        NSViewController::loadViewIfNeeded($controller);
    }
}
