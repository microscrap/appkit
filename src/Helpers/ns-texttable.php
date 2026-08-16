<?php

use AppKit\NS\NSTextTable\NSTextTable;
use Microscrap\Bindings\AppKit\Enums\TextBlockValueType;
use Microscrap\Bindings\AppKit\Enums\TextBlockVerticalAlignment;
use Microscrap\Bindings\AppKit\Enums\TextTableLayoutAlgorithm;

/*
| NSTextTable helpers — 1:1 over AppKit\NS\NSTextTable\NSTextTable
*/

if (! function_exists('ns_texttable_create')) {
    function ns_texttable_create(): int
    {
        return NSTextTable::create();
    }
}

if (! function_exists('ns_texttable_wrap')) {
    function ns_texttable_wrap(int $nsTextTablePtr): int
    {
        return NSTextTable::wrap($nsTextTablePtr);
    }
}

if (! function_exists('ns_texttable_destroy')) {
    function ns_texttable_destroy(int $table): void
    {
        NSTextTable::destroy($table);
    }
}

if (! function_exists('ns_texttable_set_number_of_columns')) {
    function ns_texttable_set_number_of_columns(int $table, int $columns): void
    {
        NSTextTable::setNumberOfColumns($table, $columns);
    }
}

if (! function_exists('ns_texttable_get_number_of_columns')) {
    function ns_texttable_get_number_of_columns(int $table): int
    {
        return NSTextTable::getNumberOfColumns($table);
    }
}

if (! function_exists('ns_texttable_set_layout_algorithm')) {
    function ns_texttable_set_layout_algorithm(int $table, TextTableLayoutAlgorithm|int $algorithm): void
    {
        NSTextTable::setLayoutAlgorithm(
            $table,
            $algorithm instanceof TextTableLayoutAlgorithm ? $algorithm->value : $algorithm
        );
    }
}

if (! function_exists('ns_texttable_get_layout_algorithm')) {
    function ns_texttable_get_layout_algorithm(int $table): int
    {
        return NSTextTable::getLayoutAlgorithm($table);
    }
}

if (! function_exists('ns_texttable_set_collapses_borders')) {
    function ns_texttable_set_collapses_borders(int $table, bool $flag): void
    {
        NSTextTable::setCollapsesBorders($table, $flag);
    }
}

if (! function_exists('ns_texttable_collapses_borders')) {
    function ns_texttable_collapses_borders(int $table): bool
    {
        return NSTextTable::collapsesBorders($table);
    }
}

if (! function_exists('ns_texttable_set_hides_empty_cells')) {
    function ns_texttable_set_hides_empty_cells(int $table, bool $flag): void
    {
        NSTextTable::setHidesEmptyCells($table, $flag);
    }
}

if (! function_exists('ns_texttable_hides_empty_cells')) {
    function ns_texttable_hides_empty_cells(int $table): bool
    {
        return NSTextTable::hidesEmptyCells($table);
    }
}

if (! function_exists('ns_texttable_set_content_width')) {
    function ns_texttable_set_content_width(int $table, float $width, TextBlockValueType|int $type): void
    {
        NSTextTable::setContentWidth(
            $table,
            $width,
            $type instanceof TextBlockValueType ? $type->value : $type
        );
    }
}

if (! function_exists('ns_texttable_get_content_width')) {
    function ns_texttable_get_content_width(int $table): array
    {
        return NSTextTable::getContentWidth($table);
    }
}

if (! function_exists('ns_texttable_set_vertical_alignment')) {
    function ns_texttable_set_vertical_alignment(int $table, TextBlockVerticalAlignment|int $alignment): void
    {
        NSTextTable::setVerticalAlignment(
            $table,
            $alignment instanceof TextBlockVerticalAlignment ? $alignment->value : $alignment
        );
    }
}

if (! function_exists('ns_texttable_get_vertical_alignment')) {
    function ns_texttable_get_vertical_alignment(int $table): int
    {
        return NSTextTable::getVerticalAlignment($table);
    }
}
