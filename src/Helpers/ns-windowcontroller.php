<?php

use AppKit\NS\NSWindowController\NSWindowController;

/*
| NSWindowController helpers — 1:1 over AppKit\NS\NSWindowController\NSWindowController
*/

if (! function_exists('ns_windowcontroller_create')) {
    function ns_windowcontroller_create(int $window): int
    {
        return NSWindowController::create($window);
    }
}

if (! function_exists('ns_windowcontroller_create_empty')) {
    function ns_windowcontroller_create_empty(): int
    {
        return NSWindowController::createEmpty();
    }
}

if (! function_exists('ns_windowcontroller_wrap')) {
    function ns_windowcontroller_wrap(int $nsWindowControllerPtr): int
    {
        return NSWindowController::wrap($nsWindowControllerPtr);
    }
}

if (! function_exists('ns_windowcontroller_destroy')) {
    function ns_windowcontroller_destroy(int $controller): void
    {
        NSWindowController::destroy($controller);
    }
}

if (! function_exists('ns_windowcontroller_nswindowcontroller')) {
    function ns_windowcontroller_nswindowcontroller(int $controller): int
    {
        return NSWindowController::nsWindowController($controller);
    }
}

if (! function_exists('ns_windowcontroller_nswindow')) {
    function ns_windowcontroller_nswindow(int $controller): int
    {
        return NSWindowController::nsWindow($controller);
    }
}

if (! function_exists('ns_windowcontroller_show_window')) {
    function ns_windowcontroller_show_window(int $controller): void
    {
        NSWindowController::showWindow($controller);
    }
}

if (! function_exists('ns_windowcontroller_close')) {
    function ns_windowcontroller_close(int $controller): void
    {
        NSWindowController::close($controller);
    }
}

if (! function_exists('ns_windowcontroller_set_content_view_controller')) {
    function ns_windowcontroller_set_content_view_controller(int $controller, int $viewController): void
    {
        NSWindowController::setContentViewController($controller, $viewController);
    }
}

if (! function_exists('ns_windowcontroller_is_window_loaded')) {
    function ns_windowcontroller_is_window_loaded(int $controller): bool
    {
        return NSWindowController::isWindowLoaded($controller);
    }
}

if (! function_exists('ns_windowcontroller_set_should_close_document')) {
    function ns_windowcontroller_set_should_close_document(int $controller, bool $shouldClose): void
    {
        NSWindowController::setShouldCloseDocument($controller, $shouldClose);
    }
}

if (! function_exists('ns_windowcontroller_should_close_document')) {
    function ns_windowcontroller_should_close_document(int $controller): bool
    {
        return NSWindowController::shouldCloseDocument($controller);
    }
}
