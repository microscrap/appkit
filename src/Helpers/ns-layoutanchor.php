<?php

use AppKit\NS\NSLayoutAnchor\NSLayoutAnchor;

/*
| NSLayoutAnchor helpers — 1:1 over AppKit\NS\NSLayoutAnchor\NSLayoutAnchor
*/

if (! function_exists('ns_layoutanchor_wrap')) {
    function ns_layoutanchor_wrap(int $nsLayoutAnchorPtr): int
    {
        return NSLayoutAnchor::wrap($nsLayoutAnchorPtr);
    }
}

if (! function_exists('ns_layoutanchor_destroy')) {
    function ns_layoutanchor_destroy(int $anchor): void
    {
        NSLayoutAnchor::destroy($anchor);
    }
}

if (! function_exists('ns_layoutanchor_nslayoutanchor')) {
    function ns_layoutanchor_nslayoutanchor(int $anchor): int
    {
        return NSLayoutAnchor::nsLayoutAnchor($anchor);
    }
}

if (! function_exists('ns_layoutanchor_constraint_equal_to_anchor')) {
    function ns_layoutanchor_constraint_equal_to_anchor(int $anchor, int $other, float $constant = 0.0, bool $hasConstant = false): int
    {
        return NSLayoutAnchor::constraintEqualToAnchor($anchor, $other, $constant, $hasConstant);
    }
}

if (! function_exists('ns_layoutanchor_constraint_greater_than_or_equal_to_anchor')) {
    function ns_layoutanchor_constraint_greater_than_or_equal_to_anchor(int $anchor, int $other, float $constant = 0.0, bool $hasConstant = false): int
    {
        return NSLayoutAnchor::constraintGreaterThanOrEqualToAnchor($anchor, $other, $constant, $hasConstant);
    }
}

if (! function_exists('ns_layoutanchor_constraint_less_than_or_equal_to_anchor')) {
    function ns_layoutanchor_constraint_less_than_or_equal_to_anchor(int $anchor, int $other, float $constant = 0.0, bool $hasConstant = false): int
    {
        return NSLayoutAnchor::constraintLessThanOrEqualToAnchor($anchor, $other, $constant, $hasConstant);
    }
}

if (! function_exists('ns_layoutanchor_name')) {
    function ns_layoutanchor_name(int $anchor): string
    {
        return NSLayoutAnchor::name($anchor);
    }
}

if (! function_exists('ns_layoutanchor_item')) {
    function ns_layoutanchor_item(int $anchor): int
    {
        return NSLayoutAnchor::item($anchor);
    }
}

if (! function_exists('ns_layoutanchor_has_ambiguous_layout')) {
    function ns_layoutanchor_has_ambiguous_layout(int $anchor): bool
    {
        return NSLayoutAnchor::hasAmbiguousLayout($anchor);
    }
}

if (! function_exists('ns_layoutanchor_constraints_affecting_layout_count')) {
    function ns_layoutanchor_constraints_affecting_layout_count(int $anchor): int
    {
        return NSLayoutAnchor::constraintsAffectingLayoutCount($anchor);
    }
}

if (! function_exists('ns_layoutanchor_constraint_affecting_layout_at')) {
    function ns_layoutanchor_constraint_affecting_layout_at(int $anchor, int $index): int
    {
        return NSLayoutAnchor::constraintAffectingLayoutAt($anchor, $index);
    }
}

if (! function_exists('ns_layoutanchor_view_leading_anchor')) {
    function ns_layoutanchor_view_leading_anchor(int $view): int
    {
        return NSLayoutAnchor::viewLeadingAnchor($view);
    }
}

if (! function_exists('ns_layoutanchor_view_trailing_anchor')) {
    function ns_layoutanchor_view_trailing_anchor(int $view): int
    {
        return NSLayoutAnchor::viewTrailingAnchor($view);
    }
}

if (! function_exists('ns_layoutanchor_view_left_anchor')) {
    function ns_layoutanchor_view_left_anchor(int $view): int
    {
        return NSLayoutAnchor::viewLeftAnchor($view);
    }
}

if (! function_exists('ns_layoutanchor_view_right_anchor')) {
    function ns_layoutanchor_view_right_anchor(int $view): int
    {
        return NSLayoutAnchor::viewRightAnchor($view);
    }
}

if (! function_exists('ns_layoutanchor_view_top_anchor')) {
    function ns_layoutanchor_view_top_anchor(int $view): int
    {
        return NSLayoutAnchor::viewTopAnchor($view);
    }
}

if (! function_exists('ns_layoutanchor_view_bottom_anchor')) {
    function ns_layoutanchor_view_bottom_anchor(int $view): int
    {
        return NSLayoutAnchor::viewBottomAnchor($view);
    }
}

if (! function_exists('ns_layoutanchor_view_width_anchor')) {
    function ns_layoutanchor_view_width_anchor(int $view): int
    {
        return NSLayoutAnchor::viewWidthAnchor($view);
    }
}

if (! function_exists('ns_layoutanchor_view_height_anchor')) {
    function ns_layoutanchor_view_height_anchor(int $view): int
    {
        return NSLayoutAnchor::viewHeightAnchor($view);
    }
}

if (! function_exists('ns_layoutanchor_view_center_x_anchor')) {
    function ns_layoutanchor_view_center_x_anchor(int $view): int
    {
        return NSLayoutAnchor::viewCenterXAnchor($view);
    }
}

if (! function_exists('ns_layoutanchor_view_center_y_anchor')) {
    function ns_layoutanchor_view_center_y_anchor(int $view): int
    {
        return NSLayoutAnchor::viewCenterYAnchor($view);
    }
}

if (! function_exists('ns_layoutanchor_view_first_baseline_anchor')) {
    function ns_layoutanchor_view_first_baseline_anchor(int $view): int
    {
        return NSLayoutAnchor::viewFirstBaselineAnchor($view);
    }
}

if (! function_exists('ns_layoutanchor_view_last_baseline_anchor')) {
    function ns_layoutanchor_view_last_baseline_anchor(int $view): int
    {
        return NSLayoutAnchor::viewLastBaselineAnchor($view);
    }
}
