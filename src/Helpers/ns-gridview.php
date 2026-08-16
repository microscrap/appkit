<?php

use AppKit\NS\NSGridView\NSGridView;

/*
| NSGridView helpers — 1:1 over AppKit\NS\NSGridView\NSGridView
*/

if (! function_exists('ns_gridview_create')) {
    function ns_gridview_create(int $x, int $y, int $width, int $height): int
    {
        return NSGridView::create($x, $y, $width, $height);
    }
}

if (! function_exists('ns_gridview_destroy')) {
    function ns_gridview_destroy(int $grid): void
    {
        NSGridView::destroy($grid);
    }
}

if (! function_exists('ns_gridview_add_view')) {
    function ns_gridview_add_view(int $grid, int $child, int $row, int $column): void
    {
        NSGridView::addView($grid, $child, $row, $column);
    }
}

if (! function_exists('ns_gridview_set_row_spacing')) {
    function ns_gridview_set_row_spacing(int $grid, float $spacing): void
    {
        NSGridView::setRowSpacing($grid, $spacing);
    }
}

if (! function_exists('ns_gridview_set_column_spacing')) {
    function ns_gridview_set_column_spacing(int $grid, float $spacing): void
    {
        NSGridView::setColumnSpacing($grid, $spacing);
    }
}

if (! function_exists('ns_gridview_number_of_rows')) {
    function ns_gridview_number_of_rows(int $grid): int
    {
        return NSGridView::numberOfRows($grid);
    }
}

if (! function_exists('ns_gridview_number_of_columns')) {
    function ns_gridview_number_of_columns(int $grid): int
    {
        return NSGridView::numberOfColumns($grid);
    }
}

if (! function_exists('ns_gridview_row_at')) {
    function ns_gridview_row_at(int $grid, int $index): int
    {
        return NSGridView::rowAt($grid, $index);
    }
}

if (! function_exists('ns_gridview_column_at')) {
    function ns_gridview_column_at(int $grid, int $index): int
    {
        return NSGridView::columnAt($grid, $index);
    }
}

if (! function_exists('ns_gridview_cell_at')) {
    function ns_gridview_cell_at(int $grid, int $column, int $row): int
    {
        return NSGridView::cellAt($grid, $column, $row);
    }
}

if (! function_exists('ns_gridview_size_for_content')) {
    function ns_gridview_size_for_content(): float
    {
        return NSGridView::sizeForContent();
    }
}
