<?php

use AppKit\NS\NSTableHeaderView\NSTableHeaderView;

/*
| NSTableHeaderView helpers — 1:1 over AppKit\NS\NSTableHeaderView\NSTableHeaderView
*/

if (! function_exists('ns_tableheaderview_create')) {
    function ns_tableheaderview_create(int $x, int $y, int $width, int $height): int
    {
        return NSTableHeaderView::create($x, $y, $width, $height);
    }
}

if (! function_exists('ns_tableheaderview_wrap')) {
    function ns_tableheaderview_wrap(int $nsTableHeaderViewPtr): int
    {
        return NSTableHeaderView::wrap($nsTableHeaderViewPtr);
    }
}

if (! function_exists('ns_tableheaderview_destroy')) {
    function ns_tableheaderview_destroy(int $header): void
    {
        NSTableHeaderView::destroy($header);
    }
}

if (! function_exists('ns_tableheaderview_set_table_view')) {
    function ns_tableheaderview_set_table_view(int $header, int $table): void
    {
        NSTableHeaderView::setTableView($header, $table);
    }
}

if (! function_exists('ns_tableheaderview_table_view')) {
    function ns_tableheaderview_table_view(int $header): int
    {
        return NSTableHeaderView::tableView($header);
    }
}

if (! function_exists('ns_tableheaderview_header_height')) {
    function ns_tableheaderview_header_height(int $header): float
    {
        return NSTableHeaderView::headerHeight($header);
    }
}
