<?php

use AppKit\NS\NSPasteboardItem\NSPasteboardItem;

/*
| NSPasteboardItem helpers — 1:1 over AppKit\NS\NSPasteboardItem\NSPasteboardItem
*/

if (! function_exists('ns_pasteboarditem_create')) {
    function ns_pasteboarditem_create(): int
    {
        return NSPasteboardItem::create();
    }
}

if (! function_exists('ns_pasteboarditem_wrap')) {
    function ns_pasteboarditem_wrap(int $nsPasteboardItemPtr): int
    {
        return NSPasteboardItem::wrap($nsPasteboardItemPtr);
    }
}

if (! function_exists('ns_pasteboarditem_destroy')) {
    function ns_pasteboarditem_destroy(int $item): void
    {
        NSPasteboardItem::destroy($item);
    }
}

if (! function_exists('ns_pasteboarditem_nspasteboarditem')) {
    function ns_pasteboarditem_nspasteboarditem(int $item): int
    {
        return NSPasteboardItem::nsPasteboardItem($item);
    }
}

if (! function_exists('ns_pasteboarditem_types')) {
    function ns_pasteboarditem_types(int $item): array
    {
        return NSPasteboardItem::types($item);
    }
}

if (! function_exists('ns_pasteboarditem_available_type_from_array')) {
    function ns_pasteboarditem_available_type_from_array(int $item, array $types): string
    {
        return NSPasteboardItem::availableTypeFromArray($item, $types);
    }
}

if (! function_exists('ns_pasteboarditem_set_string')) {
    function ns_pasteboarditem_set_string(int $item, string $value, string $type): bool
    {
        return NSPasteboardItem::setString($item, $value, $type);
    }
}

if (! function_exists('ns_pasteboarditem_string_for_type')) {
    function ns_pasteboarditem_string_for_type(int $item, string $type): string
    {
        return NSPasteboardItem::stringForType($item, $type);
    }
}
