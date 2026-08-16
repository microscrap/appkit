<?php

use AppKit\NS\NSDraggingItem\NSDraggingItem;

/*
| NSDraggingItem helpers — 1:1 over AppKit\NS\NSDraggingItem\NSDraggingItem
*/

if (! function_exists('ns_draggingitem_create_with_string')) {
    function ns_draggingitem_create_with_string(string $value): int
    {
        return NSDraggingItem::createWithString($value);
    }
}

if (! function_exists('ns_draggingitem_wrap')) {
    function ns_draggingitem_wrap(int $nsDraggingItemPtr): int
    {
        return NSDraggingItem::wrap($nsDraggingItemPtr);
    }
}

if (! function_exists('ns_draggingitem_destroy')) {
    function ns_draggingitem_destroy(int $item): void
    {
        NSDraggingItem::destroy($item);
    }
}

if (! function_exists('ns_draggingitem_nsdraggingitem')) {
    function ns_draggingitem_nsdraggingitem(int $item): int
    {
        return NSDraggingItem::nsDraggingItem($item);
    }
}

if (! function_exists('ns_draggingitem_get_item')) {
    function ns_draggingitem_get_item(int $item): int
    {
        return NSDraggingItem::getItem($item);
    }
}

if (! function_exists('ns_draggingitem_get_dragging_frame')) {
    function ns_draggingitem_get_dragging_frame(int $item): array
    {
        return NSDraggingItem::getDraggingFrame($item);
    }
}

if (! function_exists('ns_draggingitem_set_dragging_frame')) {
    function ns_draggingitem_set_dragging_frame(int $item, float $x, float $y, float $width, float $height): void
    {
        NSDraggingItem::setDraggingFrame($item, $x, $y, $width, $height);
    }
}

if (! function_exists('ns_draggingitem_set_dragging_frame_contents')) {
    function ns_draggingitem_set_dragging_frame_contents(int $item, float $x, float $y, float $width, float $height, int $contentsPtr): void
    {
        NSDraggingItem::setDraggingFrameContents($item, $x, $y, $width, $height, $contentsPtr);
    }
}

if (! function_exists('ns_draggingitem_image_components_count')) {
    function ns_draggingitem_image_components_count(int $item): int
    {
        return NSDraggingItem::imageComponentsCount($item);
    }
}
