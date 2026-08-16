<?php

use AppKit\NS\NSTextContentManager\NSTextContentManager;

/*
| NSTextContentManager helpers — 1:1 over AppKit\NS\NSTextContentManager\NSTextContentManager
*/

if (! function_exists('ns_textcontentmanager_create')) {
    function ns_textcontentmanager_create(): int
    {
        return NSTextContentManager::create();
    }
}

if (! function_exists('ns_textcontentmanager_wrap')) {
    function ns_textcontentmanager_wrap(int $nsTextContentManagerPtr): int
    {
        return NSTextContentManager::wrap($nsTextContentManagerPtr);
    }
}

if (! function_exists('ns_textcontentmanager_destroy')) {
    function ns_textcontentmanager_destroy(int $manager): void
    {
        NSTextContentManager::destroy($manager);
    }
}

if (! function_exists('ns_textcontentmanager_add_text_layout_manager')) {
    function ns_textcontentmanager_add_text_layout_manager(int $manager, int $layoutManager): void
    {
        NSTextContentManager::addTextLayoutManager($manager, $layoutManager);
    }
}

if (! function_exists('ns_textcontentmanager_remove_text_layout_manager')) {
    function ns_textcontentmanager_remove_text_layout_manager(int $manager, int $layoutManager): void
    {
        NSTextContentManager::removeTextLayoutManager($manager, $layoutManager);
    }
}

if (! function_exists('ns_textcontentmanager_text_layout_managers_count')) {
    function ns_textcontentmanager_text_layout_managers_count(int $manager): int
    {
        return NSTextContentManager::textLayoutManagersCount($manager);
    }
}

if (! function_exists('ns_textcontentmanager_has_editing_transaction')) {
    function ns_textcontentmanager_has_editing_transaction(int $manager): bool
    {
        return NSTextContentManager::hasEditingTransaction($manager);
    }
}

if (! function_exists('ns_textcontentmanager_automatically_synchronizes_text_layout_managers')) {
    function ns_textcontentmanager_automatically_synchronizes_text_layout_managers(int $manager): bool
    {
        return NSTextContentManager::automaticallySynchronizesTextLayoutManagers($manager);
    }
}

if (! function_exists('ns_textcontentmanager_set_automatically_synchronizes_text_layout_managers')) {
    function ns_textcontentmanager_set_automatically_synchronizes_text_layout_managers(int $manager, bool $flag): void
    {
        NSTextContentManager::setAutomaticallySynchronizesTextLayoutManagers($manager, $flag);
    }
}

if (! function_exists('ns_textcontentmanager_automatically_synchronizes_to_backing_store')) {
    function ns_textcontentmanager_automatically_synchronizes_to_backing_store(int $manager): bool
    {
        return NSTextContentManager::automaticallySynchronizesToBackingStore($manager);
    }
}

if (! function_exists('ns_textcontentmanager_set_automatically_synchronizes_to_backing_store')) {
    function ns_textcontentmanager_set_automatically_synchronizes_to_backing_store(int $manager, bool $flag): void
    {
        NSTextContentManager::setAutomaticallySynchronizesToBackingStore($manager, $flag);
    }
}

if (! function_exists('ns_textcontentmanager_document_range_ptr')) {
    function ns_textcontentmanager_document_range_ptr(int $manager): int
    {
        return NSTextContentManager::documentRangePtr($manager);
    }
}
