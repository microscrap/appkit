<?php

use AppKit\NS\NSTableView\NSTableView;

/*
| NSTableView helpers — 1:1 over AppKit\NS\NSTableView\NSTableView
*/

if (! function_exists('ns_tableview_create')) {
    function ns_tableview_create(int $x, int $y, int $width, int $height): int
    {
        return NSTableView::create($x, $y, $width, $height);
    }
}

if (! function_exists('ns_tableview_destroy')) {
    function ns_tableview_destroy(int $table): void
    {
        NSTableView::destroy($table);
    }
}

if (! function_exists('ns_tableview_clear_rows')) {
    function ns_tableview_clear_rows(int $table): void
    {
        NSTableView::clearRows($table);
    }
}

if (! function_exists('ns_tableview_add_row')) {
    function ns_tableview_add_row(int $table, string $value): void
    {
        NSTableView::addRow($table, $value);
    }
}

if (! function_exists('ns_tableview_row_count')) {
    function ns_tableview_row_count(int $table): int
    {
        return NSTableView::rowCount($table);
    }
}

if (! function_exists('ns_tableview_get_selected')) {
    function ns_tableview_get_selected(int $table): int
    {
        return NSTableView::getSelected($table);
    }
}

if (! function_exists('ns_tableview_set_selected')) {
    function ns_tableview_set_selected(int $table, int $row): void
    {
        NSTableView::setSelected($table, $row);
    }
}

if (! function_exists('ns_tableview_poll_change')) {
    function ns_tableview_poll_change(int $table): bool
    {
        return NSTableView::pollChange($table);
    }
}
