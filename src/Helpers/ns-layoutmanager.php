<?php

use AppKit\NS\NSLayoutManager\NSLayoutManager;

/*
| NSLayoutManager helpers — 1:1 over AppKit\NS\NSLayoutManager\NSLayoutManager
*/

if (! function_exists('ns_layoutmanager_create')) {
    function ns_layoutmanager_create(): int
    {
        return NSLayoutManager::create();
    }
}

if (! function_exists('ns_layoutmanager_wrap')) {
    function ns_layoutmanager_wrap(int $nsLayoutManagerPtr): int
    {
        return NSLayoutManager::wrap($nsLayoutManagerPtr);
    }
}

if (! function_exists('ns_layoutmanager_destroy')) {
    function ns_layoutmanager_destroy(int $manager): void
    {
        NSLayoutManager::destroy($manager);
    }
}

if (! function_exists('ns_layoutmanager_nslayoutmanager')) {
    function ns_layoutmanager_nslayoutmanager(int $manager): int
    {
        return NSLayoutManager::nsLayoutManager($manager);
    }
}

if (! function_exists('ns_layoutmanager_replace_text_storage')) {
    function ns_layoutmanager_replace_text_storage(int $manager, int $storage): void
    {
        NSLayoutManager::replaceTextStorage($manager, $storage);
    }
}

if (! function_exists('ns_layoutmanager_add_text_container')) {
    function ns_layoutmanager_add_text_container(int $manager, int $container): void
    {
        NSLayoutManager::addTextContainer($manager, $container);
    }
}

if (! function_exists('ns_layoutmanager_remove_text_container_at_index')) {
    function ns_layoutmanager_remove_text_container_at_index(int $manager, int $index): void
    {
        NSLayoutManager::removeTextContainerAtIndex($manager, $index);
    }
}

if (! function_exists('ns_layoutmanager_text_containers_count')) {
    function ns_layoutmanager_text_containers_count(int $manager): int
    {
        return NSLayoutManager::textContainersCount($manager);
    }
}

if (! function_exists('ns_layoutmanager_text_container_changed_geometry')) {
    function ns_layoutmanager_text_container_changed_geometry(int $manager, int $container): void
    {
        NSLayoutManager::textContainerChangedGeometry($manager, $container);
    }
}

if (! function_exists('ns_layoutmanager_set_shows_invisible_characters')) {
    function ns_layoutmanager_set_shows_invisible_characters(int $manager, bool $flag): void
    {
        NSLayoutManager::setShowsInvisibleCharacters($manager, $flag);
    }
}

if (! function_exists('ns_layoutmanager_shows_invisible_characters')) {
    function ns_layoutmanager_shows_invisible_characters(int $manager): bool
    {
        return NSLayoutManager::showsInvisibleCharacters($manager);
    }
}

if (! function_exists('ns_layoutmanager_set_shows_control_characters')) {
    function ns_layoutmanager_set_shows_control_characters(int $manager, bool $flag): void
    {
        NSLayoutManager::setShowsControlCharacters($manager, $flag);
    }
}

if (! function_exists('ns_layoutmanager_shows_control_characters')) {
    function ns_layoutmanager_shows_control_characters(int $manager): bool
    {
        return NSLayoutManager::showsControlCharacters($manager);
    }
}

if (! function_exists('ns_layoutmanager_set_uses_default_hyphenation')) {
    function ns_layoutmanager_set_uses_default_hyphenation(int $manager, bool $flag): void
    {
        NSLayoutManager::setUsesDefaultHyphenation($manager, $flag);
    }
}

if (! function_exists('ns_layoutmanager_uses_default_hyphenation')) {
    function ns_layoutmanager_uses_default_hyphenation(int $manager): bool
    {
        return NSLayoutManager::usesDefaultHyphenation($manager);
    }
}

if (! function_exists('ns_layoutmanager_set_default_font')) {
    function ns_layoutmanager_set_default_font(int $manager, int $font): void
    {
        NSLayoutManager::setDefaultFont($manager, $font);
    }
}

if (! function_exists('ns_layoutmanager_default_font')) {
    function ns_layoutmanager_default_font(int $manager): int
    {
        return NSLayoutManager::defaultFont($manager);
    }
}
