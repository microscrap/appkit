<?php

use AppKit\NS\NSSearchToolbarItem\NSSearchToolbarItem;

/*
| NSSearchToolbarItem helpers — 1:1 over AppKit\NS\NSSearchToolbarItem\NSSearchToolbarItem
*/

if (! function_exists('ns_searchtoolbaritem_create')) {
    function ns_searchtoolbaritem_create(string $identifier): int
    {
        return NSSearchToolbarItem::create($identifier);
    }
}

if (! function_exists('ns_searchtoolbaritem_wrap')) {
    function ns_searchtoolbaritem_wrap(int $nsSearchToolbarItemPtr): int
    {
        return NSSearchToolbarItem::wrap($nsSearchToolbarItemPtr);
    }
}

if (! function_exists('ns_searchtoolbaritem_destroy')) {
    function ns_searchtoolbaritem_destroy(int $item): void
    {
        NSSearchToolbarItem::destroy($item);
    }
}

if (! function_exists('ns_searchtoolbaritem_nssearchtoolbaritem')) {
    function ns_searchtoolbaritem_nssearchtoolbaritem(int $item): int
    {
        return NSSearchToolbarItem::nsSearchToolbarItem($item);
    }
}

if (! function_exists('ns_searchtoolbaritem_set_search_field')) {
    function ns_searchtoolbaritem_set_search_field(int $item, int $searchField): void
    {
        NSSearchToolbarItem::setSearchField($item, $searchField);
    }
}

if (! function_exists('ns_searchtoolbaritem_get_search_field')) {
    function ns_searchtoolbaritem_get_search_field(int $item): int
    {
        return NSSearchToolbarItem::getSearchField($item);
    }
}

if (! function_exists('ns_searchtoolbaritem_set_resigns_first_responder_with_cancel')) {
    function ns_searchtoolbaritem_set_resigns_first_responder_with_cancel(int $item, bool $flag): void
    {
        NSSearchToolbarItem::setResignsFirstResponderWithCancel($item, $flag);
    }
}

if (! function_exists('ns_searchtoolbaritem_resigns_first_responder_with_cancel')) {
    function ns_searchtoolbaritem_resigns_first_responder_with_cancel(int $item): bool
    {
        return NSSearchToolbarItem::resignsFirstResponderWithCancel($item);
    }
}

if (! function_exists('ns_searchtoolbaritem_set_preferred_width_for_search_field')) {
    function ns_searchtoolbaritem_set_preferred_width_for_search_field(int $item, float $width): void
    {
        NSSearchToolbarItem::setPreferredWidthForSearchField($item, $width);
    }
}

if (! function_exists('ns_searchtoolbaritem_preferred_width_for_search_field')) {
    function ns_searchtoolbaritem_preferred_width_for_search_field(int $item): float
    {
        return NSSearchToolbarItem::preferredWidthForSearchField($item);
    }
}

if (! function_exists('ns_searchtoolbaritem_begin_search_interaction')) {
    function ns_searchtoolbaritem_begin_search_interaction(int $item): void
    {
        NSSearchToolbarItem::beginSearchInteraction($item);
    }
}

if (! function_exists('ns_searchtoolbaritem_end_search_interaction')) {
    function ns_searchtoolbaritem_end_search_interaction(int $item): void
    {
        NSSearchToolbarItem::endSearchInteraction($item);
    }
}
