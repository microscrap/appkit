<?php

use AppKit\NS\NSGridRow\NSGridRow;
use Microscrap\Bindings\AppKit\Enums\GridCellPlacement;
use Microscrap\Bindings\AppKit\Enums\GridRowAlignment;

/*
| NSGridRow helpers — 1:1 over AppKit\NS\NSGridRow\NSGridRow
*/

if (! function_exists('ns_gridrow_wrap')) {
    function ns_gridrow_wrap(int $nsGridRowPtr): int
    {
        return NSGridRow::wrap($nsGridRowPtr);
    }
}

if (! function_exists('ns_gridrow_destroy')) {
    function ns_gridrow_destroy(int $row): void
    {
        NSGridRow::destroy($row);
    }
}

if (! function_exists('ns_gridrow_nsgridrow')) {
    function ns_gridrow_nsgridrow(int $row): int
    {
        return NSGridRow::nsGridRow($row);
    }
}

if (! function_exists('ns_gridrow_number_of_cells')) {
    function ns_gridrow_number_of_cells(int $row): int
    {
        return NSGridRow::numberOfCells($row);
    }
}

if (! function_exists('ns_gridrow_cell_at')) {
    function ns_gridrow_cell_at(int $row, int $index): int
    {
        return NSGridRow::cellAt($row, $index);
    }
}

if (! function_exists('ns_gridrow_set_y_placement')) {
    function ns_gridrow_set_y_placement(int $row, GridCellPlacement|int $placement): void
    {
        NSGridRow::setYPlacement($row, $placement instanceof GridCellPlacement ? $placement->value : $placement);
    }
}

if (! function_exists('ns_gridrow_get_y_placement')) {
    function ns_gridrow_get_y_placement(int $row): int
    {
        return NSGridRow::getYPlacement($row);
    }
}

if (! function_exists('ns_gridrow_set_row_alignment')) {
    function ns_gridrow_set_row_alignment(int $row, GridRowAlignment|int $alignment): void
    {
        NSGridRow::setRowAlignment($row, $alignment instanceof GridRowAlignment ? $alignment->value : $alignment);
    }
}

if (! function_exists('ns_gridrow_get_row_alignment')) {
    function ns_gridrow_get_row_alignment(int $row): int
    {
        return NSGridRow::getRowAlignment($row);
    }
}

if (! function_exists('ns_gridrow_set_height')) {
    function ns_gridrow_set_height(int $row, float $height): void
    {
        NSGridRow::setHeight($row, $height);
    }
}

if (! function_exists('ns_gridrow_get_height')) {
    function ns_gridrow_get_height(int $row): float
    {
        return NSGridRow::getHeight($row);
    }
}

if (! function_exists('ns_gridrow_set_top_padding')) {
    function ns_gridrow_set_top_padding(int $row, float $padding): void
    {
        NSGridRow::setTopPadding($row, $padding);
    }
}

if (! function_exists('ns_gridrow_get_top_padding')) {
    function ns_gridrow_get_top_padding(int $row): float
    {
        return NSGridRow::getTopPadding($row);
    }
}

if (! function_exists('ns_gridrow_set_bottom_padding')) {
    function ns_gridrow_set_bottom_padding(int $row, float $padding): void
    {
        NSGridRow::setBottomPadding($row, $padding);
    }
}

if (! function_exists('ns_gridrow_get_bottom_padding')) {
    function ns_gridrow_get_bottom_padding(int $row): float
    {
        return NSGridRow::getBottomPadding($row);
    }
}

if (! function_exists('ns_gridrow_set_hidden')) {
    function ns_gridrow_set_hidden(int $row, bool $flag): void
    {
        NSGridRow::setHidden($row, $flag);
    }
}

if (! function_exists('ns_gridrow_is_hidden')) {
    function ns_gridrow_is_hidden(int $row): bool
    {
        return NSGridRow::isHidden($row);
    }
}

if (! function_exists('ns_gridrow_merge_cells')) {
    function ns_gridrow_merge_cells(int $row, int $start, int $length): void
    {
        NSGridRow::mergeCells($row, $start, $length);
    }
}
