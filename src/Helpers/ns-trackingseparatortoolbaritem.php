<?php

use AppKit\NS\NSTrackingSeparatorToolbarItem\NSTrackingSeparatorToolbarItem;

/*
| NSTrackingSeparatorToolbarItem helpers — 1:1 over AppKit\NS\NSTrackingSeparatorToolbarItem\NSTrackingSeparatorToolbarItem
*/

if (! function_exists('ns_trackingseparatortoolbaritem_create')) {
    function ns_trackingseparatortoolbaritem_create(string $identifier): int
    {
        return NSTrackingSeparatorToolbarItem::create($identifier);
    }
}

if (! function_exists('ns_trackingseparatortoolbaritem_tracking_separator')) {
    function ns_trackingseparatortoolbaritem_tracking_separator(string $identifier, int $splitView, int $dividerIndex): int
    {
        return NSTrackingSeparatorToolbarItem::trackingSeparator($identifier, $splitView, $dividerIndex);
    }
}

if (! function_exists('ns_trackingseparatortoolbaritem_wrap')) {
    function ns_trackingseparatortoolbaritem_wrap(int $nsTrackingSeparatorToolbarItemPtr): int
    {
        return NSTrackingSeparatorToolbarItem::wrap($nsTrackingSeparatorToolbarItemPtr);
    }
}

if (! function_exists('ns_trackingseparatortoolbaritem_destroy')) {
    function ns_trackingseparatortoolbaritem_destroy(int $item): void
    {
        NSTrackingSeparatorToolbarItem::destroy($item);
    }
}

if (! function_exists('ns_trackingseparatortoolbaritem_nstrackingseparatortoolbaritem')) {
    function ns_trackingseparatortoolbaritem_nstrackingseparatortoolbaritem(int $item): int
    {
        return NSTrackingSeparatorToolbarItem::nsTrackingSeparatorToolbarItem($item);
    }
}

if (! function_exists('ns_trackingseparatortoolbaritem_set_split_view')) {
    function ns_trackingseparatortoolbaritem_set_split_view(int $item, int $splitView): void
    {
        NSTrackingSeparatorToolbarItem::setSplitView($item, $splitView);
    }
}

if (! function_exists('ns_trackingseparatortoolbaritem_get_split_view')) {
    function ns_trackingseparatortoolbaritem_get_split_view(int $item): int
    {
        return NSTrackingSeparatorToolbarItem::getSplitView($item);
    }
}

if (! function_exists('ns_trackingseparatortoolbaritem_set_divider_index')) {
    function ns_trackingseparatortoolbaritem_set_divider_index(int $item, int $dividerIndex): void
    {
        NSTrackingSeparatorToolbarItem::setDividerIndex($item, $dividerIndex);
    }
}

if (! function_exists('ns_trackingseparatortoolbaritem_get_divider_index')) {
    function ns_trackingseparatortoolbaritem_get_divider_index(int $item): int
    {
        return NSTrackingSeparatorToolbarItem::getDividerIndex($item);
    }
}
