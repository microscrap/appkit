<?php

use AppKit\NS\NSScrubberItemView\NSScrubberItemView;

/*
| NSScrubberItemView helpers — 1:1 over AppKit\NS\NSScrubberItemView\NSScrubberItemView
*/

if (! function_exists('ns_scrubberitemview_create')) {
    function ns_scrubberitemview_create(int $x, int $y, int $width, int $height): int
    {
        return NSScrubberItemView::create($x, $y, $width, $height);
    }
}

if (! function_exists('ns_scrubberitemview_wrap')) {
    function ns_scrubberitemview_wrap(int $nsScrubberItemViewPtr): int
    {
        return NSScrubberItemView::wrap($nsScrubberItemViewPtr);
    }
}

if (! function_exists('ns_scrubberitemview_destroy')) {
    function ns_scrubberitemview_destroy(int $view): void
    {
        NSScrubberItemView::destroy($view);
    }
}

if (! function_exists('ns_scrubberitemview_nsscrubberitemview')) {
    function ns_scrubberitemview_nsscrubberitemview(int $view): int
    {
        return NSScrubberItemView::nsScrubberItemView($view);
    }
}

if (! function_exists('ns_scrubberitemview_set_selected')) {
    function ns_scrubberitemview_set_selected(int $view, bool $flag): void
    {
        NSScrubberItemView::setSelected($view, $flag);
    }
}

if (! function_exists('ns_scrubberitemview_is_selected')) {
    function ns_scrubberitemview_is_selected(int $view): bool
    {
        return NSScrubberItemView::isSelected($view);
    }
}

if (! function_exists('ns_scrubberitemview_set_highlighted')) {
    function ns_scrubberitemview_set_highlighted(int $view, bool $flag): void
    {
        NSScrubberItemView::setHighlighted($view, $flag);
    }
}

if (! function_exists('ns_scrubberitemview_is_highlighted')) {
    function ns_scrubberitemview_is_highlighted(int $view): bool
    {
        return NSScrubberItemView::isHighlighted($view);
    }
}

if (! function_exists('ns_scrubberitemview_apply_layout_attributes')) {
    function ns_scrubberitemview_apply_layout_attributes(int $view, int $layoutAttributesPtr): void
    {
        NSScrubberItemView::applyLayoutAttributes($view, $layoutAttributesPtr);
    }
}
