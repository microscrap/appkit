<?php

use AppKit\NS\NSCollectionViewDiffableDataSource\NSCollectionViewDiffableDataSource;

/*
| NSCollectionViewDiffableDataSource helpers — 1:1 over AppKit\NS\NSCollectionViewDiffableDataSource\NSCollectionViewDiffableDataSource (C ABI ns_collectionviewdiffable_*)
*/

if (! function_exists('ns_collectionviewdiffable_create')) {
    function ns_collectionviewdiffable_create(int $collection): int
    {
        return NSCollectionViewDiffableDataSource::create($collection);
    }
}

if (! function_exists('ns_collectionviewdiffable_destroy')) {
    function ns_collectionviewdiffable_destroy(int $source): void
    {
        NSCollectionViewDiffableDataSource::destroy($source);
    }
}

if (! function_exists('ns_collectionviewdiffable_set_item_title')) {
    function ns_collectionviewdiffable_set_item_title(int $source, string $itemId, string $title): void
    {
        NSCollectionViewDiffableDataSource::setItemTitle($source, $itemId, $title);
    }
}

if (! function_exists('ns_collectionviewdiffable_apply')) {
    function ns_collectionviewdiffable_apply(int $source, string $sectionId, array $itemIds, bool $animating = true): void
    {
        NSCollectionViewDiffableDataSource::apply($source, $sectionId, $itemIds, $animating);
    }
}

if (! function_exists('ns_collectionviewdiffable_item_count')) {
    function ns_collectionviewdiffable_item_count(int $source): int
    {
        return NSCollectionViewDiffableDataSource::itemCount($source);
    }
}

if (! function_exists('ns_collectionviewdiffable_item_id_at')) {
    function ns_collectionviewdiffable_item_id_at(int $source, int $index): string
    {
        return NSCollectionViewDiffableDataSource::itemIdAt($source, $index);
    }
}
