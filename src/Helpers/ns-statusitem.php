<?php

use AppKit\NS\NSStatusItem\NSStatusItem;

/*
| NSStatusItem helpers — 1:1 over AppKit\NS\NSStatusItem\NSStatusItem
*/

if (! function_exists('ns_statusitem_create')) {
    function ns_statusitem_create(string $title): int
    {
        return NSStatusItem::create($title);
    }
}

if (! function_exists('ns_statusitem_wrap')) {
    function ns_statusitem_wrap(int $nsStatusItemPtr): int
    {
        return NSStatusItem::wrap($nsStatusItemPtr);
    }
}

if (! function_exists('ns_statusitem_nsstatusitem')) {
    function ns_statusitem_nsstatusitem(int $item): int
    {
        return NSStatusItem::nsStatusItem($item);
    }
}

if (! function_exists('ns_statusitem_destroy')) {
    function ns_statusitem_destroy(int $item): void
    {
        NSStatusItem::destroy($item);
    }
}

if (! function_exists('ns_statusitem_set_title')) {
    function ns_statusitem_set_title(int $item, string $title): void
    {
        NSStatusItem::setTitle($item, $title);
    }
}

if (! function_exists('ns_statusitem_poll_click')) {
    function ns_statusitem_poll_click(int $item): bool
    {
        return NSStatusItem::pollClick($item);
    }
}

if (! function_exists('ns_statusitem_button')) {
    function ns_statusitem_button(int $item): int
    {
        return NSStatusItem::button($item);
    }
}
