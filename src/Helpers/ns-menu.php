<?php

use AppKit\NS\NSMenu\NSMenu;

/*
| NSMenu helpers — 1:1 over AppKit\NS\NSMenu\NSMenu
*/

if (! function_exists('ns_menu_install_default')) {
    function ns_menu_install_default(string $appName): bool
    {
        return NSMenu::installDefault($appName);
    }
}

if (! function_exists('ns_menu_add_item')) {
    function ns_menu_add_item(string $menuTitle, string $itemTitle, string $keyEquivalent, string $actionId): bool
    {
        return NSMenu::addItem($menuTitle, $itemTitle, $keyEquivalent, $actionId);
    }
}

if (! function_exists('ns_menu_enable_about')) {
    function ns_menu_enable_about(bool $enabled, string $actionId = 'about'): bool
    {
        return NSMenu::enableAbout($enabled, $actionId);
    }
}

if (! function_exists('ns_menu_poll_action')) {
    function ns_menu_poll_action(): string
    {
        return NSMenu::pollAction();
    }
}
