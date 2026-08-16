<?php

use AppKit\NS\NSCollectionViewItem\NSCollectionViewItem;
use Microscrap\Bindings\AppKit\Enums\CollectionViewItemHighlightState;

/*
| NSCollectionViewItem helpers — 1:1 over AppKit\NS\NSCollectionViewItem\NSCollectionViewItem
*/

if (! function_exists('ns_collectionviewitem_create')) {
    function ns_collectionviewitem_create(): int
    {
        return NSCollectionViewItem::create();
    }
}

if (! function_exists('ns_collectionviewitem_wrap')) {
    function ns_collectionviewitem_wrap(int $nsCollectionViewItemPtr): int
    {
        return NSCollectionViewItem::wrap($nsCollectionViewItemPtr);
    }
}

if (! function_exists('ns_collectionviewitem_destroy')) {
    function ns_collectionviewitem_destroy(int $item): void
    {
        NSCollectionViewItem::destroy($item);
    }
}

if (! function_exists('ns_collectionviewitem_nscollectionviewitem')) {
    function ns_collectionviewitem_nscollectionviewitem(int $item): int
    {
        return NSCollectionViewItem::nsCollectionViewItem($item);
    }
}

if (! function_exists('ns_collectionviewitem_set_view')) {
    function ns_collectionviewitem_set_view(int $item, int $view): void
    {
        NSCollectionViewItem::setView($item, $view);
    }
}

if (! function_exists('ns_collectionviewitem_view')) {
    function ns_collectionviewitem_view(int $item): int
    {
        return NSCollectionViewItem::view($item);
    }
}

if (! function_exists('ns_collectionviewitem_set_title')) {
    function ns_collectionviewitem_set_title(int $item, string $title): void
    {
        NSCollectionViewItem::setTitle($item, $title);
    }
}

if (! function_exists('ns_collectionviewitem_get_title')) {
    function ns_collectionviewitem_get_title(int $item): string
    {
        return NSCollectionViewItem::getTitle($item);
    }
}

if (! function_exists('ns_collectionviewitem_set_text')) {
    function ns_collectionviewitem_set_text(int $item, string $text): void
    {
        NSCollectionViewItem::setText($item, $text);
    }
}

if (! function_exists('ns_collectionviewitem_get_text')) {
    function ns_collectionviewitem_get_text(int $item): string
    {
        return NSCollectionViewItem::getText($item);
    }
}

if (! function_exists('ns_collectionviewitem_set_selected')) {
    function ns_collectionviewitem_set_selected(int $item, bool $flag): void
    {
        NSCollectionViewItem::setSelected($item, $flag);
    }
}

if (! function_exists('ns_collectionviewitem_is_selected')) {
    function ns_collectionviewitem_is_selected(int $item): bool
    {
        return NSCollectionViewItem::isSelected($item);
    }
}

if (! function_exists('ns_collectionviewitem_set_highlight_state')) {
    function ns_collectionviewitem_set_highlight_state(int $item, CollectionViewItemHighlightState|int $state): void
    {
        NSCollectionViewItem::setHighlightState(
            $item,
            $state instanceof CollectionViewItemHighlightState ? $state->value : $state
        );
    }
}

if (! function_exists('ns_collectionviewitem_get_highlight_state')) {
    function ns_collectionviewitem_get_highlight_state(int $item): int
    {
        return NSCollectionViewItem::getHighlightState($item);
    }
}

if (! function_exists('ns_collectionviewitem_text_field')) {
    function ns_collectionviewitem_text_field(int $item): int
    {
        return NSCollectionViewItem::textField($item);
    }
}

if (! function_exists('ns_collectionviewitem_image_view')) {
    function ns_collectionviewitem_image_view(int $item): int
    {
        return NSCollectionViewItem::imageView($item);
    }
}
