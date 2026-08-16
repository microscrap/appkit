<?php

use AppKit\NS\NSSearchField\NSSearchField;

/*
| NSSearchField helpers — 1:1 over AppKit\NS\NSSearchField\NSSearchField
*/

if (! function_exists('ns_searchfield_create')) {
    function ns_searchfield_create(int $x, int $y, int $width, int $height, string $value = ''): int
    {
        return NSSearchField::create($x, $y, $width, $height, $value);
    }
}

if (! function_exists('ns_searchfield_destroy')) {
    function ns_searchfield_destroy(int $field): void
    {
        NSSearchField::destroy($field);
    }
}

if (! function_exists('ns_searchfield_set_string')) {
    function ns_searchfield_set_string(int $field, string $value): void
    {
        NSSearchField::setStringValue($field, $value);
    }
}

if (! function_exists('ns_searchfield_get_string')) {
    function ns_searchfield_get_string(int $field): string
    {
        return NSSearchField::getStringValue($field);
    }
}

if (! function_exists('ns_searchfield_set_recent_searches')) {
    function ns_searchfield_set_recent_searches(int $field, array $searches): void
    {
        NSSearchField::setRecentSearches($field, $searches);
    }
}

if (! function_exists('ns_searchfield_get_recent_searches')) {
    function ns_searchfield_get_recent_searches(int $field): array
    {
        return NSSearchField::getRecentSearches($field);
    }
}

if (! function_exists('ns_searchfield_set_recents_autosave_name')) {
    function ns_searchfield_set_recents_autosave_name(int $field, string $name): void
    {
        NSSearchField::setRecentsAutosaveName($field, $name);
    }
}

if (! function_exists('ns_searchfield_get_recents_autosave_name')) {
    function ns_searchfield_get_recents_autosave_name(int $field): string
    {
        return NSSearchField::getRecentsAutosaveName($field);
    }
}

if (! function_exists('ns_searchfield_set_sends_whole_search_string')) {
    function ns_searchfield_set_sends_whole_search_string(int $field, bool $flag): void
    {
        NSSearchField::setSendsWholeSearchString($field, $flag);
    }
}

if (! function_exists('ns_searchfield_sends_whole_search_string')) {
    function ns_searchfield_sends_whole_search_string(int $field): bool
    {
        return NSSearchField::sendsWholeSearchString($field);
    }
}

if (! function_exists('ns_searchfield_set_maximum_recents')) {
    function ns_searchfield_set_maximum_recents(int $field, int $maximum): void
    {
        NSSearchField::setMaximumRecents($field, $maximum);
    }
}

if (! function_exists('ns_searchfield_maximum_recents')) {
    function ns_searchfield_maximum_recents(int $field): int
    {
        return NSSearchField::maximumRecents($field);
    }
}

if (! function_exists('ns_searchfield_set_sends_search_string_immediately')) {
    function ns_searchfield_set_sends_search_string_immediately(int $field, bool $flag): void
    {
        NSSearchField::setSendsSearchStringImmediately($field, $flag);
    }
}

if (! function_exists('ns_searchfield_sends_search_string_immediately')) {
    function ns_searchfield_sends_search_string_immediately(int $field): bool
    {
        return NSSearchField::sendsSearchStringImmediately($field);
    }
}

if (! function_exists('ns_searchfield_poll_change')) {
    function ns_searchfield_poll_change(int $field): bool
    {
        return NSSearchField::pollChange($field);
    }
}
