<?php

use AppKit\NS\NSCollectionViewLayout\NSCollectionViewLayout;

/*
| NSCollectionViewLayout helpers — 1:1 over AppKit\NS\NSCollectionViewLayout\NSCollectionViewLayout
*/

if (! function_exists('ns_collectionviewlayout_create')) {
    function ns_collectionviewlayout_create(): int
    {
        return NSCollectionViewLayout::create();
    }
}

if (! function_exists('ns_collectionviewlayout_wrap')) {
    function ns_collectionviewlayout_wrap(int $nsCollectionViewLayoutPtr): int
    {
        return NSCollectionViewLayout::wrap($nsCollectionViewLayoutPtr);
    }
}

if (! function_exists('ns_collectionviewlayout_destroy')) {
    function ns_collectionviewlayout_destroy(int $layout): void
    {
        NSCollectionViewLayout::destroy($layout);
    }
}

if (! function_exists('ns_collectionviewlayout_nscollectionviewlayout')) {
    function ns_collectionviewlayout_nscollectionviewlayout(int $layout): int
    {
        return NSCollectionViewLayout::nsCollectionViewLayout($layout);
    }
}

if (! function_exists('ns_collectionviewlayout_invalidate')) {
    function ns_collectionviewlayout_invalidate(int $layout): void
    {
        NSCollectionViewLayout::invalidate($layout);
    }
}

if (! function_exists('ns_collectionviewlayout_collection_view')) {
    function ns_collectionviewlayout_collection_view(int $layout): int
    {
        return NSCollectionViewLayout::collectionView($layout);
    }
}

if (! function_exists('ns_collectionviewlayout_content_width')) {
    function ns_collectionviewlayout_content_width(int $layout): float
    {
        return NSCollectionViewLayout::contentWidth($layout);
    }
}

if (! function_exists('ns_collectionviewlayout_content_height')) {
    function ns_collectionviewlayout_content_height(int $layout): float
    {
        return NSCollectionViewLayout::contentHeight($layout);
    }
}
