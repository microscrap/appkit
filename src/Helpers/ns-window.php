<?php

use AppKit\NS\NSWindow\NSWindow;

/*
| NSWindow helpers — 1:1 over AppKit\NS\NSWindow\NSWindow
*/

if (! function_exists('ns_window_create')) {
    function ns_window_create(string $title, int $width, int $height): int
    {
        return NSWindow::create($title, $width, $height);
    }
}

if (! function_exists('ns_window_destroy')) {
    function ns_window_destroy(int $window): void
    {
        NSWindow::destroy($window);
    }
}

if (! function_exists('ns_window_set_title')) {
    function ns_window_set_title(int $window, string $title): void
    {
        NSWindow::setTitle($window, $title);
    }
}

if (! function_exists('ns_window_show')) {
    function ns_window_show(int $window): void
    {
        NSWindow::show($window);
    }
}

if (! function_exists('ns_window_hide')) {
    function ns_window_hide(int $window): void
    {
        NSWindow::hide($window);
    }
}

if (! function_exists('ns_window_center')) {
    function ns_window_center(int $window): void
    {
        NSWindow::center($window);
    }
}

if (! function_exists('ns_window_should_close')) {
    function ns_window_should_close(int $window): bool
    {
        return NSWindow::shouldClose($window);
    }
}

if (! function_exists('ns_window_get_width')) {
    function ns_window_get_width(int $window): int
    {
        return NSWindow::getWidth($window);
    }
}

if (! function_exists('ns_window_get_height')) {
    function ns_window_get_height(int $window): int
    {
        return NSWindow::getHeight($window);
    }
}

if (! function_exists('ns_window_content_view')) {
    function ns_window_content_view(int $window): int
    {
        return NSWindow::contentView($window);
    }
}

if (! function_exists('ns_window_set_content_view')) {
    function ns_window_set_content_view(int $window, int $view): bool
    {
        return NSWindow::setContentView($window, $view);
    }
}

if (! function_exists('ns_window_make_first_responder')) {
    function ns_window_make_first_responder(int $window, int $view): bool
    {
        return NSWindow::makeFirstResponder($window, $view);
    }
}

if (! function_exists('ns_window_screen_to_content')) {
    function ns_window_screen_to_content(int $window, float $screenX, float $screenY): array
    {
        return NSWindow::screenToContent($window, $screenX, $screenY);
    }
}

if (! function_exists('ns_window_nswindow')) {
    function ns_window_nswindow(int $window): int
    {
        return NSWindow::nsWindow($window);
    }
}

if (! function_exists('ns_window_tab')) {
    function ns_window_tab(int $window): int
    {
        return NSWindow::tab($window);
    }
}

if (! function_exists('ns_window_tab_group')) {
    function ns_window_tab_group(int $window): int
    {
        return NSWindow::tabGroup($window);
    }
}

if (! function_exists('ns_window_add_titlebar_accessory_view_controller')) {
    function ns_window_add_titlebar_accessory_view_controller(int $window, int $controller): void
    {
        NSWindow::addTitlebarAccessoryViewController($window, $controller);
    }
}
