<?php

use AppKit\NS\NSLayoutYAxisAnchor\NSLayoutYAxisAnchor;

/*
| NSLayoutYAxisAnchor helpers — 1:1 over AppKit\NS\NSLayoutYAxisAnchor\NSLayoutYAxisAnchor
*/

if (! function_exists('ns_layoutyaxisanchor_anchor_with_offset_to_anchor')) {
    function ns_layoutyaxisanchor_anchor_with_offset_to_anchor(int $anchor, int $other): int
    {
        return NSLayoutYAxisAnchor::anchorWithOffsetToAnchor($anchor, $other);
    }
}

if (! function_exists('ns_layoutyaxisanchor_constraint_equal_to_system_spacing_below_anchor')) {
    function ns_layoutyaxisanchor_constraint_equal_to_system_spacing_below_anchor(int $anchor, int $other, float $multiplier): int
    {
        return NSLayoutYAxisAnchor::constraintEqualToSystemSpacingBelowAnchor($anchor, $other, $multiplier);
    }
}

if (! function_exists('ns_layoutyaxisanchor_constraint_greater_than_or_equal_to_system_spacing_below_anchor')) {
    function ns_layoutyaxisanchor_constraint_greater_than_or_equal_to_system_spacing_below_anchor(int $anchor, int $other, float $multiplier): int
    {
        return NSLayoutYAxisAnchor::constraintGreaterThanOrEqualToSystemSpacingBelowAnchor($anchor, $other, $multiplier);
    }
}

if (! function_exists('ns_layoutyaxisanchor_constraint_less_than_or_equal_to_system_spacing_below_anchor')) {
    function ns_layoutyaxisanchor_constraint_less_than_or_equal_to_system_spacing_below_anchor(int $anchor, int $other, float $multiplier): int
    {
        return NSLayoutYAxisAnchor::constraintLessThanOrEqualToSystemSpacingBelowAnchor($anchor, $other, $multiplier);
    }
}
