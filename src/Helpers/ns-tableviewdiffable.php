<?php

use AppKit\NS\NSTableViewDiffableDataSource\NSTableViewDiffableDataSource;

/*
| NSTableViewDiffableDataSource helpers — 1:1 over AppKit\NS\NSTableViewDiffableDataSource\NSTableViewDiffableDataSource
*/

if (! function_exists('ns_tableviewdiffable_create')) {
    function ns_tableviewdiffable_create(int $table): int
    {
        return NSTableViewDiffableDataSource::create($table);
    }
}

if (! function_exists('ns_tableviewdiffable_destroy')) {
    function ns_tableviewdiffable_destroy(int $source): void
    {
        NSTableViewDiffableDataSource::destroy($source);
    }
}

if (! function_exists('ns_tableviewdiffable_set_item_title')) {
    function ns_tableviewdiffable_set_item_title(int $source, string $itemId, string $title): void
    {
        NSTableViewDiffableDataSource::setItemTitle($source, $itemId, $title);
    }
}

if (! function_exists('ns_tableviewdiffable_apply')) {
    /**
     * @param list<string> $itemIds
     */
    function ns_tableviewdiffable_apply(int $source, string $sectionId, array $itemIds, bool $animating = true): void
    {
        NSTableViewDiffableDataSource::apply($source, $sectionId, $itemIds, $animating);
    }
}

if (! function_exists('ns_tableviewdiffable_item_count')) {
    function ns_tableviewdiffable_item_count(int $source): int
    {
        return NSTableViewDiffableDataSource::itemCount($source);
    }
}

if (! function_exists('ns_tableviewdiffable_item_id_at')) {
    function ns_tableviewdiffable_item_id_at(int $source, int $index): string
    {
        return NSTableViewDiffableDataSource::itemIdAt($source, $index);
    }
}
