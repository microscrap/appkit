<?php

use AppKit\NS\NSScrubberSelectionView\NSScrubberSelectionView;

/*
| NSScrubberSelectionView helpers — 1:1 over AppKit\NS\NSScrubberSelectionView\NSScrubberSelectionView
*/

if (! function_exists('ns_scrubberselectionview_create')) {
    function ns_scrubberselectionview_create(int $x, int $y, int $width, int $height): int
    {
        return NSScrubberSelectionView::create($x, $y, $width, $height);
    }
}

if (! function_exists('ns_scrubberselectionview_wrap')) {
    function ns_scrubberselectionview_wrap(int $nsScrubberSelectionViewPtr): int
    {
        return NSScrubberSelectionView::wrap($nsScrubberSelectionViewPtr);
    }
}

if (! function_exists('ns_scrubberselectionview_destroy')) {
    function ns_scrubberselectionview_destroy(int $view): void
    {
        NSScrubberSelectionView::destroy($view);
    }
}

if (! function_exists('ns_scrubberselectionview_nsscrubberselectionview')) {
    function ns_scrubberselectionview_nsscrubberselectionview(int $view): int
    {
        return NSScrubberSelectionView::nsScrubberSelectionView($view);
    }
}

if (! function_exists('ns_scrubberselectionview_set_selected')) {
    function ns_scrubberselectionview_set_selected(int $view, bool $flag): void
    {
        NSScrubberSelectionView::setSelected($view, $flag);
    }
}

if (! function_exists('ns_scrubberselectionview_is_selected')) {
    function ns_scrubberselectionview_is_selected(int $view): bool
    {
        return NSScrubberSelectionView::isSelected($view);
    }
}

if (! function_exists('ns_scrubberselectionview_set_highlighted')) {
    function ns_scrubberselectionview_set_highlighted(int $view, bool $flag): void
    {
        NSScrubberSelectionView::setHighlighted($view, $flag);
    }
}

if (! function_exists('ns_scrubberselectionview_is_highlighted')) {
    function ns_scrubberselectionview_is_highlighted(int $view): bool
    {
        return NSScrubberSelectionView::isHighlighted($view);
    }
}

if (! function_exists('ns_scrubberselectionview_apply_layout_attributes')) {
    function ns_scrubberselectionview_apply_layout_attributes(int $view, int $layoutAttributesPtr): void
    {
        NSScrubberSelectionView::applyLayoutAttributes($view, $layoutAttributesPtr);
    }
}
