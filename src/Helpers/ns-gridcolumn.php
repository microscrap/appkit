<?php

use AppKit\NS\NSGridColumn\NSGridColumn;
use Microscrap\Bindings\AppKit\Enums\GridCellPlacement;

/*
| NSGridColumn helpers — 1:1 over AppKit\NS\NSGridColumn\NSGridColumn
*/

if (! function_exists('ns_gridcolumn_wrap')) {
    function ns_gridcolumn_wrap(int $nsGridColumnPtr): int
    {
        return NSGridColumn::wrap($nsGridColumnPtr);
    }
}

if (! function_exists('ns_gridcolumn_destroy')) {
    function ns_gridcolumn_destroy(int $column): void
    {
        NSGridColumn::destroy($column);
    }
}

if (! function_exists('ns_gridcolumn_nsgridcolumn')) {
    function ns_gridcolumn_nsgridcolumn(int $column): int
    {
        return NSGridColumn::nsGridColumn($column);
    }
}

if (! function_exists('ns_gridcolumn_number_of_cells')) {
    function ns_gridcolumn_number_of_cells(int $column): int
    {
        return NSGridColumn::numberOfCells($column);
    }
}

if (! function_exists('ns_gridcolumn_cell_at')) {
    function ns_gridcolumn_cell_at(int $column, int $index): int
    {
        return NSGridColumn::cellAt($column, $index);
    }
}

if (! function_exists('ns_gridcolumn_set_x_placement')) {
    function ns_gridcolumn_set_x_placement(int $column, GridCellPlacement|int $placement): void
    {
        NSGridColumn::setXPlacement($column, $placement instanceof GridCellPlacement ? $placement->value : $placement);
    }
}

if (! function_exists('ns_gridcolumn_get_x_placement')) {
    function ns_gridcolumn_get_x_placement(int $column): int
    {
        return NSGridColumn::getXPlacement($column);
    }
}

if (! function_exists('ns_gridcolumn_set_width')) {
    function ns_gridcolumn_set_width(int $column, float $width): void
    {
        NSGridColumn::setWidth($column, $width);
    }
}

if (! function_exists('ns_gridcolumn_get_width')) {
    function ns_gridcolumn_get_width(int $column): float
    {
        return NSGridColumn::getWidth($column);
    }
}

if (! function_exists('ns_gridcolumn_set_leading_padding')) {
    function ns_gridcolumn_set_leading_padding(int $column, float $padding): void
    {
        NSGridColumn::setLeadingPadding($column, $padding);
    }
}

if (! function_exists('ns_gridcolumn_get_leading_padding')) {
    function ns_gridcolumn_get_leading_padding(int $column): float
    {
        return NSGridColumn::getLeadingPadding($column);
    }
}

if (! function_exists('ns_gridcolumn_set_trailing_padding')) {
    function ns_gridcolumn_set_trailing_padding(int $column, float $padding): void
    {
        NSGridColumn::setTrailingPadding($column, $padding);
    }
}

if (! function_exists('ns_gridcolumn_get_trailing_padding')) {
    function ns_gridcolumn_get_trailing_padding(int $column): float
    {
        return NSGridColumn::getTrailingPadding($column);
    }
}

if (! function_exists('ns_gridcolumn_set_hidden')) {
    function ns_gridcolumn_set_hidden(int $column, bool $flag): void
    {
        NSGridColumn::setHidden($column, $flag);
    }
}

if (! function_exists('ns_gridcolumn_is_hidden')) {
    function ns_gridcolumn_is_hidden(int $column): bool
    {
        return NSGridColumn::isHidden($column);
    }
}

if (! function_exists('ns_gridcolumn_merge_cells')) {
    function ns_gridcolumn_merge_cells(int $column, int $start, int $length): void
    {
        NSGridColumn::mergeCells($column, $start, $length);
    }
}
