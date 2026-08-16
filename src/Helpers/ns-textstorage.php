<?php

use AppKit\NS\NSTextStorage\NSTextStorage;

/*
| NSTextStorage helpers — 1:1 over AppKit\NS\NSTextStorage\NSTextStorage
*/

if (! function_exists('ns_textstorage_create')) {
    function ns_textstorage_create(string $value = ''): int
    {
        return NSTextStorage::create($value);
    }
}

if (! function_exists('ns_textstorage_wrap')) {
    function ns_textstorage_wrap(int $nsTextStoragePtr): int
    {
        return NSTextStorage::wrap($nsTextStoragePtr);
    }
}

if (! function_exists('ns_textstorage_destroy')) {
    function ns_textstorage_destroy(int $storage): void
    {
        NSTextStorage::destroy($storage);
    }
}

if (! function_exists('ns_textstorage_nstextstorage')) {
    function ns_textstorage_nstextstorage(int $storage): int
    {
        return NSTextStorage::nsTextStorage($storage);
    }
}

if (! function_exists('ns_textstorage_set_string')) {
    function ns_textstorage_set_string(int $storage, string $value): void
    {
        NSTextStorage::setString($storage, $value);
    }
}

if (! function_exists('ns_textstorage_get_string')) {
    function ns_textstorage_get_string(int $storage): string
    {
        return NSTextStorage::getString($storage);
    }
}

if (! function_exists('ns_textstorage_add_layout_manager')) {
    function ns_textstorage_add_layout_manager(int $storage, int $manager): void
    {
        NSTextStorage::addLayoutManager($storage, $manager);
    }
}

if (! function_exists('ns_textstorage_remove_layout_manager')) {
    function ns_textstorage_remove_layout_manager(int $storage, int $manager): void
    {
        NSTextStorage::removeLayoutManager($storage, $manager);
    }
}

if (! function_exists('ns_textstorage_layout_managers_count')) {
    function ns_textstorage_layout_managers_count(int $storage): int
    {
        return NSTextStorage::layoutManagersCount($storage);
    }
}

if (! function_exists('ns_textstorage_edited_mask')) {
    function ns_textstorage_edited_mask(int $storage): int
    {
        return NSTextStorage::editedMask($storage);
    }
}

if (! function_exists('ns_textstorage_get_edited_range')) {
    function ns_textstorage_get_edited_range(int $storage): array
    {
        return NSTextStorage::getEditedRange($storage);
    }
}

if (! function_exists('ns_textstorage_change_in_length')) {
    function ns_textstorage_change_in_length(int $storage): int
    {
        return NSTextStorage::changeInLength($storage);
    }
}

if (! function_exists('ns_textstorage_begin_editing')) {
    function ns_textstorage_begin_editing(int $storage): void
    {
        NSTextStorage::beginEditing($storage);
    }
}

if (! function_exists('ns_textstorage_end_editing')) {
    function ns_textstorage_end_editing(int $storage): void
    {
        NSTextStorage::endEditing($storage);
    }
}

if (! function_exists('ns_textstorage_process_editing')) {
    function ns_textstorage_process_editing(int $storage): void
    {
        NSTextStorage::processEditing($storage);
    }
}

if (! function_exists('ns_textstorage_set_fixes_attributes_lazily')) {
    function ns_textstorage_set_fixes_attributes_lazily(int $storage, bool $flag): void
    {
        NSTextStorage::setFixesAttributesLazily($storage, $flag);
    }
}

if (! function_exists('ns_textstorage_fixes_attributes_lazily')) {
    function ns_textstorage_fixes_attributes_lazily(int $storage): bool
    {
        return NSTextStorage::fixesAttributesLazily($storage);
    }
}
