<?php

use AppKit\NS\NSTableRowView\NSTableRowView;

/*
| NSTableRowView helpers — 1:1 over AppKit\NS\NSTableRowView\NSTableRowView
*/

if (! function_exists('ns_tablerowview_create')) {
    function ns_tablerowview_create(int $x, int $y, int $width, int $height): int
    {
        return NSTableRowView::create($x, $y, $width, $height);
    }
}

if (! function_exists('ns_tablerowview_wrap')) {
    function ns_tablerowview_wrap(int $nsTableRowViewPtr): int
    {
        return NSTableRowView::wrap($nsTableRowViewPtr);
    }
}

if (! function_exists('ns_tablerowview_destroy')) {
    function ns_tablerowview_destroy(int $row): void
    {
        NSTableRowView::destroy($row);
    }
}

if (! function_exists('ns_tablerowview_set_emphasized')) {
    function ns_tablerowview_set_emphasized(int $row, bool $flag): void
    {
        NSTableRowView::setEmphasized($row, $flag);
    }
}

if (! function_exists('ns_tablerowview_is_emphasized')) {
    function ns_tablerowview_is_emphasized(int $row): bool
    {
        return NSTableRowView::isEmphasized($row);
    }
}

if (! function_exists('ns_tablerowview_set_selected')) {
    function ns_tablerowview_set_selected(int $row, bool $flag): void
    {
        NSTableRowView::setSelected($row, $flag);
    }
}

if (! function_exists('ns_tablerowview_is_selected')) {
    function ns_tablerowview_is_selected(int $row): bool
    {
        return NSTableRowView::isSelected($row);
    }
}

if (! function_exists('ns_tablerowview_set_group_row_style')) {
    function ns_tablerowview_set_group_row_style(int $row, bool $flag): void
    {
        NSTableRowView::setGroupRowStyle($row, $flag);
    }
}

if (! function_exists('ns_tablerowview_is_group_row_style')) {
    function ns_tablerowview_is_group_row_style(int $row): bool
    {
        return NSTableRowView::isGroupRowStyle($row);
    }
}

if (! function_exists('ns_tablerowview_set_floating')) {
    function ns_tablerowview_set_floating(int $row, bool $flag): void
    {
        NSTableRowView::setFloating($row, $flag);
    }
}

if (! function_exists('ns_tablerowview_is_floating')) {
    function ns_tablerowview_is_floating(int $row): bool
    {
        return NSTableRowView::isFloating($row);
    }
}

if (! function_exists('ns_tablerowview_interior_background_style')) {
    function ns_tablerowview_interior_background_style(int $row): int
    {
        return NSTableRowView::interiorBackgroundStyle($row);
    }
}
