<?php

use AppKit\NS\NSPasteboard\NSPasteboard;

/*
| NSPasteboard helpers — 1:1 over AppKit\NS\NSPasteboard\NSPasteboard
*/

if (! function_exists('ns_pasteboard_general')) {
    function ns_pasteboard_general(): int
    {
        return NSPasteboard::general();
    }
}

if (! function_exists('ns_pasteboard_with_name')) {
    function ns_pasteboard_with_name(string $name): int
    {
        return NSPasteboard::withName($name);
    }
}

if (! function_exists('ns_pasteboard_with_unique_name')) {
    function ns_pasteboard_with_unique_name(): int
    {
        return NSPasteboard::withUniqueName();
    }
}

if (! function_exists('ns_pasteboard_wrap')) {
    function ns_pasteboard_wrap(int $nsPasteboardPtr): int
    {
        return NSPasteboard::wrap($nsPasteboardPtr);
    }
}

if (! function_exists('ns_pasteboard_destroy')) {
    function ns_pasteboard_destroy(int $pasteboard): void
    {
        NSPasteboard::destroy($pasteboard);
    }
}

if (! function_exists('ns_pasteboard_nspasteboard')) {
    function ns_pasteboard_nspasteboard(int $pasteboard): int
    {
        return NSPasteboard::nsPasteboard($pasteboard);
    }
}

if (! function_exists('ns_pasteboard_get_name')) {
    function ns_pasteboard_get_name(int $pasteboard): string
    {
        return NSPasteboard::getName($pasteboard);
    }
}

if (! function_exists('ns_pasteboard_change_count')) {
    function ns_pasteboard_change_count(int $pasteboard): int
    {
        return NSPasteboard::changeCount($pasteboard);
    }
}

if (! function_exists('ns_pasteboard_clear_contents')) {
    function ns_pasteboard_clear_contents(int $pasteboard): int
    {
        return NSPasteboard::clearContents($pasteboard);
    }
}

if (! function_exists('ns_pasteboard_write_strings')) {
    function ns_pasteboard_write_strings(int $pasteboard, array $strings, string $type): bool
    {
        return NSPasteboard::writeStrings($pasteboard, $strings, $type);
    }
}

if (! function_exists('ns_pasteboard_string_for_type')) {
    function ns_pasteboard_string_for_type(int $pasteboard, string $type): string
    {
        return NSPasteboard::stringForType($pasteboard, $type);
    }
}

if (! function_exists('ns_pasteboard_set_string')) {
    function ns_pasteboard_set_string(int $pasteboard, string $value, string $type): bool
    {
        return NSPasteboard::setString($pasteboard, $value, $type);
    }
}

if (! function_exists('ns_pasteboard_types')) {
    function ns_pasteboard_types(int $pasteboard): array
    {
        return NSPasteboard::types($pasteboard);
    }
}

if (! function_exists('ns_pasteboard_can_read_types')) {
    function ns_pasteboard_can_read_types(int $pasteboard, array $types): bool
    {
        return NSPasteboard::canReadTypes($pasteboard, $types);
    }
}

if (! function_exists('ns_pasteboard_items_count')) {
    function ns_pasteboard_items_count(int $pasteboard): int
    {
        return NSPasteboard::itemsCount($pasteboard);
    }
}

if (! function_exists('ns_pasteboard_item_at')) {
    function ns_pasteboard_item_at(int $pasteboard, int $index): int
    {
        return NSPasteboard::itemAt($pasteboard, $index);
    }
}

if (! function_exists('ns_pasteboard_access_behavior')) {
    function ns_pasteboard_access_behavior(int $pasteboard): int
    {
        return NSPasteboard::accessBehavior($pasteboard);
    }
}
