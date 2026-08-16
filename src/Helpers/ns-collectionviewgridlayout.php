<?php

use AppKit\NS\NSCollectionViewGridLayout\NSCollectionViewGridLayout;

/*
| NSCollectionViewGridLayout helpers — 1:1 over AppKit\NS\NSCollectionViewGridLayout\NSCollectionViewGridLayout
*/

if (! function_exists('ns_collectionviewgridlayout_create')) {
    function ns_collectionviewgridlayout_create(): int
    {
        return NSCollectionViewGridLayout::create();
    }
}

if (! function_exists('ns_collectionviewgridlayout_wrap')) {
    function ns_collectionviewgridlayout_wrap(int $nsCollectionViewGridLayoutPtr): int
    {
        return NSCollectionViewGridLayout::wrap($nsCollectionViewGridLayoutPtr);
    }
}

if (! function_exists('ns_collectionviewgridlayout_destroy')) {
    function ns_collectionviewgridlayout_destroy(int $layout): void
    {
        NSCollectionViewGridLayout::destroy($layout);
    }
}

if (! function_exists('ns_collectionviewgridlayout_nscollectionviewgridlayout')) {
    function ns_collectionviewgridlayout_nscollectionviewgridlayout(int $layout): int
    {
        return NSCollectionViewGridLayout::nsCollectionViewGridLayout($layout);
    }
}

if (! function_exists('ns_collectionviewgridlayout_set_margins')) {
    function ns_collectionviewgridlayout_set_margins(int $layout, float $top, float $left, float $bottom, float $right): void
    {
        NSCollectionViewGridLayout::setMargins($layout, $top, $left, $bottom, $right);
    }
}

if (! function_exists('ns_collectionviewgridlayout_set_minimum_interitem_spacing')) {
    function ns_collectionviewgridlayout_set_minimum_interitem_spacing(int $layout, float $spacing): void
    {
        NSCollectionViewGridLayout::setMinimumInteritemSpacing($layout, $spacing);
    }
}

if (! function_exists('ns_collectionviewgridlayout_get_minimum_interitem_spacing')) {
    function ns_collectionviewgridlayout_get_minimum_interitem_spacing(int $layout): float
    {
        return NSCollectionViewGridLayout::getMinimumInteritemSpacing($layout);
    }
}

if (! function_exists('ns_collectionviewgridlayout_set_minimum_line_spacing')) {
    function ns_collectionviewgridlayout_set_minimum_line_spacing(int $layout, float $spacing): void
    {
        NSCollectionViewGridLayout::setMinimumLineSpacing($layout, $spacing);
    }
}

if (! function_exists('ns_collectionviewgridlayout_get_minimum_line_spacing')) {
    function ns_collectionviewgridlayout_get_minimum_line_spacing(int $layout): float
    {
        return NSCollectionViewGridLayout::getMinimumLineSpacing($layout);
    }
}

if (! function_exists('ns_collectionviewgridlayout_set_maximum_number_of_rows')) {
    function ns_collectionviewgridlayout_set_maximum_number_of_rows(int $layout, int $rows): void
    {
        NSCollectionViewGridLayout::setMaximumNumberOfRows($layout, $rows);
    }
}

if (! function_exists('ns_collectionviewgridlayout_get_maximum_number_of_rows')) {
    function ns_collectionviewgridlayout_get_maximum_number_of_rows(int $layout): int
    {
        return NSCollectionViewGridLayout::getMaximumNumberOfRows($layout);
    }
}

if (! function_exists('ns_collectionviewgridlayout_set_maximum_number_of_columns')) {
    function ns_collectionviewgridlayout_set_maximum_number_of_columns(int $layout, int $columns): void
    {
        NSCollectionViewGridLayout::setMaximumNumberOfColumns($layout, $columns);
    }
}

if (! function_exists('ns_collectionviewgridlayout_get_maximum_number_of_columns')) {
    function ns_collectionviewgridlayout_get_maximum_number_of_columns(int $layout): int
    {
        return NSCollectionViewGridLayout::getMaximumNumberOfColumns($layout);
    }
}

if (! function_exists('ns_collectionviewgridlayout_set_minimum_item_size')) {
    function ns_collectionviewgridlayout_set_minimum_item_size(int $layout, float $width, float $height): void
    {
        NSCollectionViewGridLayout::setMinimumItemSize($layout, $width, $height);
    }
}

if (! function_exists('ns_collectionviewgridlayout_get_minimum_item_size')) {
    function ns_collectionviewgridlayout_get_minimum_item_size(int $layout): array
    {
        return NSCollectionViewGridLayout::getMinimumItemSize($layout);
    }
}

if (! function_exists('ns_collectionviewgridlayout_set_maximum_item_size')) {
    function ns_collectionviewgridlayout_set_maximum_item_size(int $layout, float $width, float $height): void
    {
        NSCollectionViewGridLayout::setMaximumItemSize($layout, $width, $height);
    }
}

if (! function_exists('ns_collectionviewgridlayout_get_maximum_item_size')) {
    function ns_collectionviewgridlayout_get_maximum_item_size(int $layout): array
    {
        return NSCollectionViewGridLayout::getMaximumItemSize($layout);
    }
}
