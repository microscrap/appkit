<?php

use AppKit\NS\NSCollectionView\NSCollectionView;

/*
| NSCollectionView helpers — 1:1 over AppKit\NS\NSCollectionView\NSCollectionView
*/

if (! function_exists('ns_collectionview_create')) {
    function ns_collectionview_create(int $x, int $y, int $width, int $height): int
    {
        return NSCollectionView::create($x, $y, $width, $height);
    }
}

if (! function_exists('ns_collectionview_destroy')) {
    function ns_collectionview_destroy(int $collection): void
    {
        NSCollectionView::destroy($collection);
    }
}

if (! function_exists('ns_collectionview_clear')) {
    function ns_collectionview_clear(int $collection): void
    {
        NSCollectionView::clear($collection);
    }
}

if (! function_exists('ns_collectionview_add_item')) {
    function ns_collectionview_add_item(int $collection, string $title): void
    {
        NSCollectionView::addItem($collection, $title);
    }
}

if (! function_exists('ns_collectionview_item_count')) {
    function ns_collectionview_item_count(int $collection): int
    {
        return NSCollectionView::itemCount($collection);
    }
}

if (! function_exists('ns_collectionview_get_selected')) {
    function ns_collectionview_get_selected(int $collection): int
    {
        return NSCollectionView::getSelected($collection);
    }
}

if (! function_exists('ns_collectionview_set_selected')) {
    function ns_collectionview_set_selected(int $collection, int $index): void
    {
        NSCollectionView::setSelected($collection, $index);
    }
}

if (! function_exists('ns_collectionview_poll_change')) {
    function ns_collectionview_poll_change(int $collection): bool
    {
        return NSCollectionView::pollChange($collection);
    }
}

if (! function_exists('ns_collectionview_set_layout')) {
    function ns_collectionview_set_layout(int $collection, int $layout): void
    {
        NSCollectionView::setLayout($collection, $layout);
    }
}

if (! function_exists('ns_collectionview_get_layout')) {
    function ns_collectionview_get_layout(int $collection): int
    {
        return NSCollectionView::getLayout($collection);
    }
}
