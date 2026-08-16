<?php

use AppKit\NS\NSCollectionViewTransitionLayout\NSCollectionViewTransitionLayout;

/*
| NSCollectionViewTransitionLayout helpers — 1:1 over AppKit\NS\NSCollectionViewTransitionLayout\NSCollectionViewTransitionLayout
*/

if (! function_exists('ns_collectionviewtransitionlayout_create')) {
    function ns_collectionviewtransitionlayout_create(int $currentLayout, int $nextLayout): int
    {
        return NSCollectionViewTransitionLayout::create($currentLayout, $nextLayout);
    }
}

if (! function_exists('ns_collectionviewtransitionlayout_wrap')) {
    function ns_collectionviewtransitionlayout_wrap(int $nsCollectionViewTransitionLayoutPtr): int
    {
        return NSCollectionViewTransitionLayout::wrap($nsCollectionViewTransitionLayoutPtr);
    }
}

if (! function_exists('ns_collectionviewtransitionlayout_destroy')) {
    function ns_collectionviewtransitionlayout_destroy(int $layout): void
    {
        NSCollectionViewTransitionLayout::destroy($layout);
    }
}

if (! function_exists('ns_collectionviewtransitionlayout_nscollectionviewtransitionlayout')) {
    function ns_collectionviewtransitionlayout_nscollectionviewtransitionlayout(int $layout): int
    {
        return NSCollectionViewTransitionLayout::nsCollectionViewTransitionLayout($layout);
    }
}

if (! function_exists('ns_collectionviewtransitionlayout_set_progress')) {
    function ns_collectionviewtransitionlayout_set_progress(int $layout, float $progress): void
    {
        NSCollectionViewTransitionLayout::setProgress($layout, $progress);
    }
}

if (! function_exists('ns_collectionviewtransitionlayout_get_progress')) {
    function ns_collectionviewtransitionlayout_get_progress(int $layout): float
    {
        return NSCollectionViewTransitionLayout::getProgress($layout);
    }
}

if (! function_exists('ns_collectionviewtransitionlayout_current_layout')) {
    function ns_collectionviewtransitionlayout_current_layout(int $layout): int
    {
        return NSCollectionViewTransitionLayout::currentLayout($layout);
    }
}

if (! function_exists('ns_collectionviewtransitionlayout_next_layout')) {
    function ns_collectionviewtransitionlayout_next_layout(int $layout): int
    {
        return NSCollectionViewTransitionLayout::nextLayout($layout);
    }
}

if (! function_exists('ns_collectionviewtransitionlayout_update_value')) {
    function ns_collectionviewtransitionlayout_update_value(int $layout, string $key, float $value): void
    {
        NSCollectionViewTransitionLayout::updateValue($layout, $key, $value);
    }
}

if (! function_exists('ns_collectionviewtransitionlayout_value_for_key')) {
    function ns_collectionviewtransitionlayout_value_for_key(int $layout, string $key): float
    {
        return NSCollectionViewTransitionLayout::valueForKey($layout, $key);
    }
}
