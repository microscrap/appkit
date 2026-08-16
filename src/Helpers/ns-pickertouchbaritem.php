<?php

use AppKit\NS\NSPickerTouchBarItem\NSPickerTouchBarItem;

/*
| NSPickerTouchBarItem helpers — 1:1 over AppKit\NS\NSPickerTouchBarItem\NSPickerTouchBarItem
*/

if (! function_exists('ns_pickertouchbaritem_picker_with_labels')) {
    function ns_pickertouchbaritem_picker_with_labels(string $identifier, array $labels, int $selectionMode): int
    {
        return NSPickerTouchBarItem::pickerWithLabels($identifier, $labels, $selectionMode);
    }
}

if (! function_exists('ns_pickertouchbaritem_wrap')) {
    function ns_pickertouchbaritem_wrap(int $ptr): int
    {
        return NSPickerTouchBarItem::wrap($ptr);
    }
}

if (! function_exists('ns_pickertouchbaritem_destroy')) {
    function ns_pickertouchbaritem_destroy(int $item): void
    {
        NSPickerTouchBarItem::destroy($item);
    }
}

if (! function_exists('ns_pickertouchbaritem_nspickertouchbaritem')) {
    function ns_pickertouchbaritem_nspickertouchbaritem(int $item): int
    {
        return NSPickerTouchBarItem::nsPickerTouchBarItem($item);
    }
}

if (! function_exists('ns_pickertouchbaritem_set_selected_index')) {
    function ns_pickertouchbaritem_set_selected_index(int $item, int $index): void
    {
        NSPickerTouchBarItem::setSelectedIndex($item, $index);
    }
}

if (! function_exists('ns_pickertouchbaritem_get_selected_index')) {
    function ns_pickertouchbaritem_get_selected_index(int $item): int
    {
        return NSPickerTouchBarItem::getSelectedIndex($item);
    }
}

if (! function_exists('ns_pickertouchbaritem_poll_action')) {
    function ns_pickertouchbaritem_poll_action(int $item): bool
    {
        return NSPickerTouchBarItem::pollAction($item);
    }
}
