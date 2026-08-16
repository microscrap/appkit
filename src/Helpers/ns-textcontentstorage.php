<?php

use AppKit\NS\NSTextContentStorage\NSTextContentStorage;

/*
| NSTextContentStorage helpers — 1:1 over AppKit\NS\NSTextContentStorage\NSTextContentStorage
*/

if (! function_exists('ns_textcontentstorage_create')) {
    function ns_textcontentstorage_create(): int
    {
        return NSTextContentStorage::create();
    }
}

if (! function_exists('ns_textcontentstorage_wrap')) {
    function ns_textcontentstorage_wrap(int $nsTextContentStoragePtr): int
    {
        return NSTextContentStorage::wrap($nsTextContentStoragePtr);
    }
}

if (! function_exists('ns_textcontentstorage_destroy')) {
    function ns_textcontentstorage_destroy(int $storage): void
    {
        NSTextContentStorage::destroy($storage);
    }
}

if (! function_exists('ns_textcontentstorage_get_attributed_string')) {
    function ns_textcontentstorage_get_attributed_string(int $storage): string
    {
        return NSTextContentStorage::getAttributedString($storage);
    }
}

if (! function_exists('ns_textcontentstorage_set_attributed_string')) {
    function ns_textcontentstorage_set_attributed_string(int $storage, string $value): void
    {
        NSTextContentStorage::setAttributedString($storage, $value);
    }
}

if (! function_exists('ns_textcontentstorage_text_element_for_attributed_string')) {
    function ns_textcontentstorage_text_element_for_attributed_string(int $storage, string $value): int
    {
        return NSTextContentStorage::textElementForAttributedString($storage, $value);
    }
}

if (! function_exists('ns_textcontentstorage_attributed_string_for_text_element')) {
    function ns_textcontentstorage_attributed_string_for_text_element(int $storage, int $element): string
    {
        return NSTextContentStorage::attributedStringForTextElement($storage, $element);
    }
}
