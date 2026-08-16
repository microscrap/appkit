<?php

use AppKit\NS\NSButtonTouchBarItem\NSButtonTouchBarItem;

/*
| NSButtonTouchBarItem helpers — 1:1 over AppKit\NS\NSButtonTouchBarItem\NSButtonTouchBarItem
*/

if (! function_exists('ns_buttontouchbaritem_button_with_title')) {
    function ns_buttontouchbaritem_button_with_title(string $identifier, string $title): int
    {
        return NSButtonTouchBarItem::buttonWithTitle($identifier, $title);
    }
}

if (! function_exists('ns_buttontouchbaritem_button_with_image')) {
    function ns_buttontouchbaritem_button_with_image(string $identifier, int $image): int
    {
        return NSButtonTouchBarItem::buttonWithImage($identifier, $image);
    }
}

if (! function_exists('ns_buttontouchbaritem_wrap')) {
    function ns_buttontouchbaritem_wrap(int $ptr): int
    {
        return NSButtonTouchBarItem::wrap($ptr);
    }
}

if (! function_exists('ns_buttontouchbaritem_destroy')) {
    function ns_buttontouchbaritem_destroy(int $item): void
    {
        NSButtonTouchBarItem::destroy($item);
    }
}

if (! function_exists('ns_buttontouchbaritem_nsbuttontouchbaritem')) {
    function ns_buttontouchbaritem_nsbuttontouchbaritem(int $item): int
    {
        return NSButtonTouchBarItem::nsButtonTouchBarItem($item);
    }
}

if (! function_exists('ns_buttontouchbaritem_set_title')) {
    function ns_buttontouchbaritem_set_title(int $item, string $title): void
    {
        NSButtonTouchBarItem::setTitle($item, $title);
    }
}

if (! function_exists('ns_buttontouchbaritem_poll_action')) {
    function ns_buttontouchbaritem_poll_action(int $item): bool
    {
        return NSButtonTouchBarItem::pollAction($item);
    }
}
