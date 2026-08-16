<?php

use AppKit\NS\NSOutlineView\NSOutlineView;

/*
| NSOutlineView helpers — 1:1 over AppKit\NS\NSOutlineView\NSOutlineView
*/

if (! function_exists('ns_outlineview_create')) {
    function ns_outlineview_create(int $x, int $y, int $width, int $height): int
    {
        return NSOutlineView::create($x, $y, $width, $height);
    }
}

if (! function_exists('ns_outlineview_destroy')) {
    function ns_outlineview_destroy(int $outline): void
    {
        NSOutlineView::destroy($outline);
    }
}

if (! function_exists('ns_outlineview_clear')) {
    function ns_outlineview_clear(int $outline): void
    {
        NSOutlineView::clear($outline);
    }
}

if (! function_exists('ns_outlineview_add_root')) {
    function ns_outlineview_add_root(int $outline, string $title): int
    {
        return NSOutlineView::addRoot($outline, $title);
    }
}

if (! function_exists('ns_outlineview_add_child')) {
    function ns_outlineview_add_child(int $outline, int $parentId, string $title): int
    {
        return NSOutlineView::addChild($outline, $parentId, $title);
    }
}

if (! function_exists('ns_outlineview_item_count')) {
    function ns_outlineview_item_count(int $outline): int
    {
        return NSOutlineView::itemCount($outline);
    }
}

if (! function_exists('ns_outlineview_get_selected')) {
    function ns_outlineview_get_selected(int $outline): int
    {
        return NSOutlineView::getSelected($outline);
    }
}

if (! function_exists('ns_outlineview_set_selected')) {
    function ns_outlineview_set_selected(int $outline, int $itemId): void
    {
        NSOutlineView::setSelected($outline, $itemId);
    }
}

if (! function_exists('ns_outlineview_poll_change')) {
    function ns_outlineview_poll_change(int $outline): bool
    {
        return NSOutlineView::pollChange($outline);
    }
}
