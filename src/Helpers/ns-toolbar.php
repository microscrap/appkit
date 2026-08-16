<?php

use AppKit\NS\NSToolbar\NSToolbar;

/*
| NSToolbar helpers — 1:1 over AppKit\NS\NSToolbar\NSToolbar
*/

if (! function_exists('ns_toolbar_create')) {
    function ns_toolbar_create(): int
    {
        return NSToolbar::create();
    }
}

if (! function_exists('ns_toolbar_destroy')) {
    function ns_toolbar_destroy(int $toolbar): void
    {
        NSToolbar::destroy($toolbar);
    }
}

if (! function_exists('ns_toolbar_add_item')) {
    function ns_toolbar_add_item(int $toolbar, string $title, string $actionId): void
    {
        NSToolbar::addItem($toolbar, $title, $actionId);
    }
}

if (! function_exists('ns_toolbar_install')) {
    function ns_toolbar_install(int $toolbar, int $window): bool
    {
        return NSToolbar::install($toolbar, $window);
    }
}

if (! function_exists('ns_toolbar_poll_action')) {
    function ns_toolbar_poll_action(int $toolbar): string
    {
        return NSToolbar::pollAction($toolbar);
    }
}
