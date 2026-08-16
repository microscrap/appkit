<?php

use AppKit\NS\NSColorList\NSColorList;

/*
| NSColorList helpers — 1:1 over AppKit\NS\NSColorList\NSColorList
*/

if (! function_exists('ns_colorlist_wrap')) {
    function ns_colorlist_wrap(int $nsColorListPtr): int
    {
        return NSColorList::wrap($nsColorListPtr);
    }
}

if (! function_exists('ns_colorlist_destroy')) {
    function ns_colorlist_destroy(int $list): void
    {
        NSColorList::destroy($list);
    }
}

if (! function_exists('ns_colorlist_available_count')) {
    function ns_colorlist_available_count(): int
    {
        return NSColorList::availableCount();
    }
}

if (! function_exists('ns_colorlist_available_at')) {
    function ns_colorlist_available_at(int $index): int
    {
        return NSColorList::availableAt($index);
    }
}

if (! function_exists('ns_colorlist_named')) {
    function ns_colorlist_named(string $name): int
    {
        return NSColorList::named($name);
    }
}

if (! function_exists('ns_colorlist_create')) {
    function ns_colorlist_create(string $name = ''): int
    {
        return NSColorList::create($name);
    }
}

if (! function_exists('ns_colorlist_create_from_file')) {
    function ns_colorlist_create_from_file(string $name, string $path): int
    {
        return NSColorList::createFromFile($name, $path);
    }
}

if (! function_exists('ns_colorlist_name')) {
    function ns_colorlist_name(int $list): string
    {
        return NSColorList::name($list);
    }
}

if (! function_exists('ns_colorlist_is_editable')) {
    function ns_colorlist_is_editable(int $list): bool
    {
        return NSColorList::isEditable($list);
    }
}

if (! function_exists('ns_colorlist_set_color')) {
    function ns_colorlist_set_color(int $list, int $color, string $key): void
    {
        NSColorList::setColor($list, $color, $key);
    }
}

if (! function_exists('ns_colorlist_insert_color')) {
    function ns_colorlist_insert_color(int $list, int $color, string $key, int $index): void
    {
        NSColorList::insertColor($list, $color, $key, $index);
    }
}

if (! function_exists('ns_colorlist_remove_color_with_key')) {
    function ns_colorlist_remove_color_with_key(int $list, string $key): void
    {
        NSColorList::removeColorWithKey($list, $key);
    }
}

if (! function_exists('ns_colorlist_color_with_key')) {
    function ns_colorlist_color_with_key(int $list, string $key): int
    {
        return NSColorList::colorWithKey($list, $key);
    }
}

if (! function_exists('ns_colorlist_all_keys_count')) {
    function ns_colorlist_all_keys_count(int $list): int
    {
        return NSColorList::allKeysCount($list);
    }
}

if (! function_exists('ns_colorlist_all_key_at')) {
    function ns_colorlist_all_key_at(int $list, int $index): string
    {
        return NSColorList::allKeyAt($list, $index);
    }
}

if (! function_exists('ns_colorlist_write_to_url')) {
    function ns_colorlist_write_to_url(int $list, string $url = ''): bool
    {
        return NSColorList::writeToUrl($list, $url);
    }
}

if (! function_exists('ns_colorlist_remove_file')) {
    function ns_colorlist_remove_file(int $list): void
    {
        NSColorList::removeFile($list);
    }
}

if (! function_exists('ns_colorlist_nscolorlist')) {
    function ns_colorlist_nscolorlist(int $list): int
    {
        return NSColorList::nsColorList($list);
    }
}
