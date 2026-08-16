<?php

use AppKit\NS\NSScrubberArrangedView\NSScrubberArrangedView;

/*
| NSScrubberArrangedView helpers — 1:1 over AppKit\NS\NSScrubberArrangedView\NSScrubberArrangedView
*/

if (! function_exists('ns_scrubberarrangedview_create')) {
    function ns_scrubberarrangedview_create(int $x, int $y, int $width, int $height): int
    {
        return NSScrubberArrangedView::create($x, $y, $width, $height);
    }
}

if (! function_exists('ns_scrubberarrangedview_wrap')) {
    function ns_scrubberarrangedview_wrap(int $nsScrubberArrangedViewPtr): int
    {
        return NSScrubberArrangedView::wrap($nsScrubberArrangedViewPtr);
    }
}

if (! function_exists('ns_scrubberarrangedview_destroy')) {
    function ns_scrubberarrangedview_destroy(int $view): void
    {
        NSScrubberArrangedView::destroy($view);
    }
}

if (! function_exists('ns_scrubberarrangedview_nsscrubberarrangedview')) {
    function ns_scrubberarrangedview_nsscrubberarrangedview(int $view): int
    {
        return NSScrubberArrangedView::nsScrubberArrangedView($view);
    }
}

if (! function_exists('ns_scrubberarrangedview_set_selected')) {
    function ns_scrubberarrangedview_set_selected(int $view, bool $flag): void
    {
        NSScrubberArrangedView::setSelected($view, $flag);
    }
}

if (! function_exists('ns_scrubberarrangedview_is_selected')) {
    function ns_scrubberarrangedview_is_selected(int $view): bool
    {
        return NSScrubberArrangedView::isSelected($view);
    }
}

if (! function_exists('ns_scrubberarrangedview_set_highlighted')) {
    function ns_scrubberarrangedview_set_highlighted(int $view, bool $flag): void
    {
        NSScrubberArrangedView::setHighlighted($view, $flag);
    }
}

if (! function_exists('ns_scrubberarrangedview_is_highlighted')) {
    function ns_scrubberarrangedview_is_highlighted(int $view): bool
    {
        return NSScrubberArrangedView::isHighlighted($view);
    }
}

if (! function_exists('ns_scrubberarrangedview_apply_layout_attributes')) {
    function ns_scrubberarrangedview_apply_layout_attributes(int $view, int $layoutAttributesPtr): void
    {
        NSScrubberArrangedView::applyLayoutAttributes($view, $layoutAttributesPtr);
    }
}
