<?php

use AppKit\NS\NSTextList\NSTextList;

/*
| NSTextList helpers — 1:1 over AppKit\NS\NSTextList\NSTextList
*/

if (! function_exists('ns_textlist_create')) {
    function ns_textlist_create(string $markerFormat, int $options = 0, int $startingItemNumber = 1): int
    {
        return NSTextList::create($markerFormat, $options, $startingItemNumber);
    }
}

if (! function_exists('ns_textlist_wrap')) {
    function ns_textlist_wrap(int $nsTextListPtr): int
    {
        return NSTextList::wrap($nsTextListPtr);
    }
}

if (! function_exists('ns_textlist_destroy')) {
    function ns_textlist_destroy(int $list): void
    {
        NSTextList::destroy($list);
    }
}

if (! function_exists('ns_textlist_marker_for_item_number')) {
    function ns_textlist_marker_for_item_number(int $list, int $itemNumber): string
    {
        return NSTextList::markerForItemNumber($list, $itemNumber);
    }
}

if (! function_exists('ns_textlist_is_ordered')) {
    function ns_textlist_is_ordered(int $list): bool
    {
        return NSTextList::isOrdered($list);
    }
}

if (! function_exists('ns_textlist_set_starting_item_number')) {
    function ns_textlist_set_starting_item_number(int $list, int $number): void
    {
        NSTextList::setStartingItemNumber($list, $number);
    }
}

if (! function_exists('ns_textlist_get_starting_item_number')) {
    function ns_textlist_get_starting_item_number(int $list): int
    {
        return NSTextList::getStartingItemNumber($list);
    }
}

if (! function_exists('ns_textlist_get_marker_format')) {
    function ns_textlist_get_marker_format(int $list): string
    {
        return NSTextList::getMarkerFormat($list);
    }
}
