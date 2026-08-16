<?php

use AppKit\NS\NSTableColumn\NSTableColumn;
use Microscrap\Bindings\AppKit\Enums\TableColumnResizingOptions;

/*
| NSTableColumn helpers — 1:1 over AppKit\NS\NSTableColumn\NSTableColumn
*/

if (! function_exists('ns_tablecolumn_create')) {
    function ns_tablecolumn_create(string $value = ''): int
    {
        return NSTableColumn::create($value);
    }
}

if (! function_exists('ns_tablecolumn_wrap')) {
    function ns_tablecolumn_wrap(int $nsTableColumnPtr): int
    {
        return NSTableColumn::wrap($nsTableColumnPtr);
    }
}

if (! function_exists('ns_tablecolumn_destroy')) {
    function ns_tablecolumn_destroy(int $column): void
    {
        NSTableColumn::destroy($column);
    }
}

if (! function_exists('ns_tablecolumn_nstablecolumn')) {
    function ns_tablecolumn_nstablecolumn(int $column): int
    {
        return NSTableColumn::nsTableColumn($column);
    }
}

if (! function_exists('ns_tablecolumn_set_identifier')) {
    function ns_tablecolumn_set_identifier(int $column, string $identifier): void
    {
        NSTableColumn::setIdentifier($column, $identifier);
    }
}

if (! function_exists('ns_tablecolumn_get_identifier')) {
    function ns_tablecolumn_get_identifier(int $column): string
    {
        return NSTableColumn::getIdentifier($column);
    }
}

if (! function_exists('ns_tablecolumn_set_title')) {
    function ns_tablecolumn_set_title(int $column, string $title): void
    {
        NSTableColumn::setTitle($column, $title);
    }
}

if (! function_exists('ns_tablecolumn_get_title')) {
    function ns_tablecolumn_get_title(int $column): string
    {
        return NSTableColumn::getTitle($column);
    }
}

if (! function_exists('ns_tablecolumn_set_width')) {
    function ns_tablecolumn_set_width(int $column, float $width): void
    {
        NSTableColumn::setWidth($column, $width);
    }
}

if (! function_exists('ns_tablecolumn_get_width')) {
    function ns_tablecolumn_get_width(int $column): float
    {
        return NSTableColumn::getWidth($column);
    }
}

if (! function_exists('ns_tablecolumn_set_min_width')) {
    function ns_tablecolumn_set_min_width(int $column, float $width): void
    {
        NSTableColumn::setMinWidth($column, $width);
    }
}

if (! function_exists('ns_tablecolumn_get_min_width')) {
    function ns_tablecolumn_get_min_width(int $column): float
    {
        return NSTableColumn::getMinWidth($column);
    }
}

if (! function_exists('ns_tablecolumn_set_max_width')) {
    function ns_tablecolumn_set_max_width(int $column, float $width): void
    {
        NSTableColumn::setMaxWidth($column, $width);
    }
}

if (! function_exists('ns_tablecolumn_get_max_width')) {
    function ns_tablecolumn_get_max_width(int $column): float
    {
        return NSTableColumn::getMaxWidth($column);
    }
}

if (! function_exists('ns_tablecolumn_set_hidden')) {
    function ns_tablecolumn_set_hidden(int $column, bool $flag): void
    {
        NSTableColumn::setHidden($column, $flag);
    }
}

if (! function_exists('ns_tablecolumn_is_hidden')) {
    function ns_tablecolumn_is_hidden(int $column): bool
    {
        return NSTableColumn::isHidden($column);
    }
}

if (! function_exists('ns_tablecolumn_set_editable')) {
    function ns_tablecolumn_set_editable(int $column, bool $flag): void
    {
        NSTableColumn::setEditable($column, $flag);
    }
}

if (! function_exists('ns_tablecolumn_is_editable')) {
    function ns_tablecolumn_is_editable(int $column): bool
    {
        return NSTableColumn::isEditable($column);
    }
}

if (! function_exists('ns_tablecolumn_set_resizing_mask')) {
    function ns_tablecolumn_set_resizing_mask(int $column, TableColumnResizingOptions|int $mask): void
    {
        NSTableColumn::setResizingMask(
            $column,
            $mask instanceof TableColumnResizingOptions ? $mask->value : $mask
        );
    }
}

if (! function_exists('ns_tablecolumn_get_resizing_mask')) {
    function ns_tablecolumn_get_resizing_mask(int $column): int
    {
        return NSTableColumn::getResizingMask($column);
    }
}
