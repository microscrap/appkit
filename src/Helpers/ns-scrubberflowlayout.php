<?php

use AppKit\NS\NSScrubberFlowLayout\NSScrubberFlowLayout;

/*
| NSScrubberFlowLayout helpers — 1:1 over AppKit\NS\NSScrubberFlowLayout\NSScrubberFlowLayout
*/

if (! function_exists('ns_scrubberflowlayout_create')) {
    function ns_scrubberflowlayout_create(): int
    {
        return NSScrubberFlowLayout::create();
    }
}

if (! function_exists('ns_scrubberflowlayout_wrap')) {
    function ns_scrubberflowlayout_wrap(int $nsScrubberFlowLayoutPtr): int
    {
        return NSScrubberFlowLayout::wrap($nsScrubberFlowLayoutPtr);
    }
}

if (! function_exists('ns_scrubberflowlayout_destroy')) {
    function ns_scrubberflowlayout_destroy(int $layout): void
    {
        NSScrubberFlowLayout::destroy($layout);
    }
}

if (! function_exists('ns_scrubberflowlayout_nsscrubberflowlayout')) {
    function ns_scrubberflowlayout_nsscrubberflowlayout(int $layout): int
    {
        return NSScrubberFlowLayout::nsScrubberFlowLayout($layout);
    }
}

if (! function_exists('ns_scrubberflowlayout_set_item_spacing')) {
    function ns_scrubberflowlayout_set_item_spacing(int $layout, float $spacing): void
    {
        NSScrubberFlowLayout::setItemSpacing($layout, $spacing);
    }
}

if (! function_exists('ns_scrubberflowlayout_get_item_spacing')) {
    function ns_scrubberflowlayout_get_item_spacing(int $layout): float
    {
        return NSScrubberFlowLayout::getItemSpacing($layout);
    }
}

if (! function_exists('ns_scrubberflowlayout_set_item_size')) {
    function ns_scrubberflowlayout_set_item_size(int $layout, float $width, float $height): void
    {
        NSScrubberFlowLayout::setItemSize($layout, $width, $height);
    }
}

if (! function_exists('ns_scrubberflowlayout_get_item_size')) {
    function ns_scrubberflowlayout_get_item_size(int $layout): array
    {
        return NSScrubberFlowLayout::getItemSize($layout);
    }
}

if (! function_exists('ns_scrubberflowlayout_invalidate_items_at_indexes')) {
    function ns_scrubberflowlayout_invalidate_items_at_indexes(int $layout, array $indexes): void
    {
        NSScrubberFlowLayout::invalidateItemsAtIndexes($layout, $indexes);
    }
}
