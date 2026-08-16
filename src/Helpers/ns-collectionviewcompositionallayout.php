<?php

use AppKit\NS\NSCollectionViewCompositionalLayout\NSCollectionViewCompositionalLayout;
use Microscrap\Bindings\AppKit\Enums\CollectionViewScrollDirection;

/*
| NSCollectionViewCompositionalLayout helpers — 1:1 over AppKit\NS\NSCollectionViewCompositionalLayout\NSCollectionViewCompositionalLayout
*/

if (! function_exists('ns_collectionviewcompositionallayout_create_list')) {
    function ns_collectionviewcompositionallayout_create_list(float $itemHeight = 32.0): int
    {
        return NSCollectionViewCompositionalLayout::createList($itemHeight);
    }
}

if (! function_exists('ns_collectionviewcompositionallayout_create_grid')) {
    function ns_collectionviewcompositionallayout_create_grid(int $columns = 3, float $itemHeight = 96.0): int
    {
        return NSCollectionViewCompositionalLayout::createGrid($columns, $itemHeight);
    }
}

if (! function_exists('ns_collectionviewcompositionallayout_wrap')) {
    function ns_collectionviewcompositionallayout_wrap(int $nsCollectionViewCompositionalLayoutPtr): int
    {
        return NSCollectionViewCompositionalLayout::wrap($nsCollectionViewCompositionalLayoutPtr);
    }
}

if (! function_exists('ns_collectionviewcompositionallayout_destroy')) {
    function ns_collectionviewcompositionallayout_destroy(int $layout): void
    {
        NSCollectionViewCompositionalLayout::destroy($layout);
    }
}

if (! function_exists('ns_collectionviewcompositionallayout_nscollectionviewcompositionallayout')) {
    function ns_collectionviewcompositionallayout_nscollectionviewcompositionallayout(int $layout): int
    {
        return NSCollectionViewCompositionalLayout::nsCollectionViewCompositionalLayout($layout);
    }
}

if (! function_exists('ns_collectionviewcompositionallayout_set_scroll_direction')) {
    function ns_collectionviewcompositionallayout_set_scroll_direction(int $layout, CollectionViewScrollDirection|int $direction): void
    {
        NSCollectionViewCompositionalLayout::setScrollDirection(
            $layout,
            $direction instanceof CollectionViewScrollDirection ? $direction->value : $direction
        );
    }
}

if (! function_exists('ns_collectionviewcompositionallayout_get_scroll_direction')) {
    function ns_collectionviewcompositionallayout_get_scroll_direction(int $layout): int
    {
        return NSCollectionViewCompositionalLayout::getScrollDirection($layout);
    }
}

if (! function_exists('ns_collectionviewcompositionallayout_set_inter_section_spacing')) {
    function ns_collectionviewcompositionallayout_set_inter_section_spacing(int $layout, float $spacing): void
    {
        NSCollectionViewCompositionalLayout::setInterSectionSpacing($layout, $spacing);
    }
}

if (! function_exists('ns_collectionviewcompositionallayout_get_inter_section_spacing')) {
    function ns_collectionviewcompositionallayout_get_inter_section_spacing(int $layout): float
    {
        return NSCollectionViewCompositionalLayout::getInterSectionSpacing($layout);
    }
}
