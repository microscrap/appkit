<?php

use AppKit\NS\NSGridCell\NSGridCell;
use Microscrap\Bindings\AppKit\Enums\GridCellPlacement;
use Microscrap\Bindings\AppKit\Enums\GridRowAlignment;

/*
| NSGridCell helpers — 1:1 over AppKit\NS\NSGridCell\NSGridCell
*/

if (! function_exists('ns_gridcell_wrap')) {
    function ns_gridcell_wrap(int $nsGridCellPtr): int
    {
        return NSGridCell::wrap($nsGridCellPtr);
    }
}

if (! function_exists('ns_gridcell_destroy')) {
    function ns_gridcell_destroy(int $cell): void
    {
        NSGridCell::destroy($cell);
    }
}

if (! function_exists('ns_gridcell_nsgridcell')) {
    function ns_gridcell_nsgridcell(int $cell): int
    {
        return NSGridCell::nsGridCell($cell);
    }
}

if (! function_exists('ns_gridcell_set_content_view')) {
    function ns_gridcell_set_content_view(int $cell, int $view): void
    {
        NSGridCell::setContentView($cell, $view);
    }
}

if (! function_exists('ns_gridcell_content_view')) {
    function ns_gridcell_content_view(int $cell): int
    {
        return NSGridCell::contentView($cell);
    }
}

if (! function_exists('ns_gridcell_row')) {
    function ns_gridcell_row(int $cell): int
    {
        return NSGridCell::row($cell);
    }
}

if (! function_exists('ns_gridcell_column')) {
    function ns_gridcell_column(int $cell): int
    {
        return NSGridCell::column($cell);
    }
}

if (! function_exists('ns_gridcell_set_x_placement')) {
    function ns_gridcell_set_x_placement(int $cell, GridCellPlacement|int $placement): void
    {
        NSGridCell::setXPlacement($cell, $placement instanceof GridCellPlacement ? $placement->value : $placement);
    }
}

if (! function_exists('ns_gridcell_get_x_placement')) {
    function ns_gridcell_get_x_placement(int $cell): int
    {
        return NSGridCell::getXPlacement($cell);
    }
}

if (! function_exists('ns_gridcell_set_y_placement')) {
    function ns_gridcell_set_y_placement(int $cell, GridCellPlacement|int $placement): void
    {
        NSGridCell::setYPlacement($cell, $placement instanceof GridCellPlacement ? $placement->value : $placement);
    }
}

if (! function_exists('ns_gridcell_get_y_placement')) {
    function ns_gridcell_get_y_placement(int $cell): int
    {
        return NSGridCell::getYPlacement($cell);
    }
}

if (! function_exists('ns_gridcell_set_row_alignment')) {
    function ns_gridcell_set_row_alignment(int $cell, GridRowAlignment|int $alignment): void
    {
        NSGridCell::setRowAlignment($cell, $alignment instanceof GridRowAlignment ? $alignment->value : $alignment);
    }
}

if (! function_exists('ns_gridcell_get_row_alignment')) {
    function ns_gridcell_get_row_alignment(int $cell): int
    {
        return NSGridCell::getRowAlignment($cell);
    }
}
