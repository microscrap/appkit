<?php

use AppKit\NS\NSHelpManager\NSHelpManager;

/*
| NSHelpManager helpers — 1:1 over AppKit\NS\NSHelpManager\NSHelpManager
*/

if (! function_exists('ns_helpmanager_shared')) {
    function ns_helpmanager_shared(): int
    {
        return NSHelpManager::shared();
    }
}

if (! function_exists('ns_helpmanager_destroy')) {
    function ns_helpmanager_destroy(int $manager): void
    {
        NSHelpManager::destroy($manager);
    }
}

if (! function_exists('ns_helpmanager_nshelpmanager')) {
    function ns_helpmanager_nshelpmanager(int $manager): int
    {
        return NSHelpManager::nsHelpManager($manager);
    }
}

if (! function_exists('ns_helpmanager_is_context_help_mode_active')) {
    function ns_helpmanager_is_context_help_mode_active(): bool
    {
        return NSHelpManager::isContextHelpModeActive();
    }
}

if (! function_exists('ns_helpmanager_set_context_help_mode_active')) {
    function ns_helpmanager_set_context_help_mode_active(bool $active): void
    {
        NSHelpManager::setContextHelpModeActive($active);
    }
}

if (! function_exists('ns_helpmanager_set_context_help_for_object')) {
    function ns_helpmanager_set_context_help_for_object(int $objectPtr, string $helpText): void
    {
        NSHelpManager::setContextHelpForObject($objectPtr, $helpText);
    }
}

if (! function_exists('ns_helpmanager_remove_context_help_for_object')) {
    function ns_helpmanager_remove_context_help_for_object(int $objectPtr): void
    {
        NSHelpManager::removeContextHelpForObject($objectPtr);
    }
}

if (! function_exists('ns_helpmanager_context_help_for_object')) {
    function ns_helpmanager_context_help_for_object(int $objectPtr): string
    {
        return NSHelpManager::contextHelpForObject($objectPtr);
    }
}

if (! function_exists('ns_helpmanager_show_context_help_for_object')) {
    function ns_helpmanager_show_context_help_for_object(int $objectPtr, float $x, float $y): bool
    {
        return NSHelpManager::showContextHelpForObject($objectPtr, $x, $y);
    }
}

if (! function_exists('ns_helpmanager_open_help_anchor')) {
    function ns_helpmanager_open_help_anchor(string $anchor, string $book = ''): void
    {
        NSHelpManager::openHelpAnchor($anchor, $book);
    }
}

if (! function_exists('ns_helpmanager_find_string')) {
    function ns_helpmanager_find_string(string $query, string $book = ''): void
    {
        NSHelpManager::findString($query, $book);
    }
}

if (! function_exists('ns_helpmanager_register_books_in_bundle_path')) {
    function ns_helpmanager_register_books_in_bundle_path(string $bundlePath = ''): bool
    {
        return NSHelpManager::registerBooksInBundlePath($bundlePath);
    }
}
