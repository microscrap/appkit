<?php

use AppKit\NS\NSMatrix\NSMatrix;
use Microscrap\Bindings\AppKit\Enums\MatrixMode;

/*
| NSMatrix helpers — 1:1 over AppKit\NS\NSMatrix\NSMatrix (deprecated AppKit type)
*/

if (! function_exists('ns_matrix_create')) {
    function ns_matrix_create(int $x, int $y, int $width, int $height): int
    {
        return NSMatrix::create($x, $y, $width, $height);
    }
}

if (! function_exists('ns_matrix_destroy')) {
    function ns_matrix_destroy(int $matrix): void
    {
        NSMatrix::destroy($matrix);
    }
}

if (! function_exists('ns_matrix_set_mode')) {
    function ns_matrix_set_mode(int $matrix, MatrixMode|int $mode): void
    {
        NSMatrix::setMode($matrix, $mode instanceof MatrixMode ? $mode->value : $mode);
    }
}

if (! function_exists('ns_matrix_get_mode')) {
    function ns_matrix_get_mode(int $matrix): int
    {
        return NSMatrix::getMode($matrix);
    }
}

if (! function_exists('ns_matrix_number_of_rows')) {
    function ns_matrix_number_of_rows(int $matrix): int
    {
        return NSMatrix::numberOfRows($matrix);
    }
}

if (! function_exists('ns_matrix_number_of_columns')) {
    function ns_matrix_number_of_columns(int $matrix): int
    {
        return NSMatrix::numberOfColumns($matrix);
    }
}

if (! function_exists('ns_matrix_add_row')) {
    function ns_matrix_add_row(int $matrix): void
    {
        NSMatrix::addRow($matrix);
    }
}

if (! function_exists('ns_matrix_add_column')) {
    function ns_matrix_add_column(int $matrix): void
    {
        NSMatrix::addColumn($matrix);
    }
}

if (! function_exists('ns_matrix_selected_row')) {
    function ns_matrix_selected_row(int $matrix): int
    {
        return NSMatrix::selectedRow($matrix);
    }
}

if (! function_exists('ns_matrix_selected_column')) {
    function ns_matrix_selected_column(int $matrix): int
    {
        return NSMatrix::selectedColumn($matrix);
    }
}

if (! function_exists('ns_matrix_select_cell_at')) {
    function ns_matrix_select_cell_at(int $matrix, int $row, int $column): void
    {
        NSMatrix::selectCellAt($matrix, $row, $column);
    }
}

if (! function_exists('ns_matrix_cell_at')) {
    function ns_matrix_cell_at(int $matrix, int $row, int $column): int
    {
        return NSMatrix::cellAt($matrix, $row, $column);
    }
}
