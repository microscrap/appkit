<?php

use AppKit\NS\NSLayoutXAxisAnchor\NSLayoutXAxisAnchor;

/*
| NSLayoutXAxisAnchor helpers — 1:1 over AppKit\NS\NSLayoutXAxisAnchor\NSLayoutXAxisAnchor
*/

if (! function_exists('ns_layoutxaxisanchor_anchor_with_offset_to_anchor')) {
    function ns_layoutxaxisanchor_anchor_with_offset_to_anchor(int $anchor, int $other): int
    {
        return NSLayoutXAxisAnchor::anchorWithOffsetToAnchor($anchor, $other);
    }
}

if (! function_exists('ns_layoutxaxisanchor_constraint_equal_to_system_spacing_after_anchor')) {
    function ns_layoutxaxisanchor_constraint_equal_to_system_spacing_after_anchor(int $anchor, int $other, float $multiplier): int
    {
        return NSLayoutXAxisAnchor::constraintEqualToSystemSpacingAfterAnchor($anchor, $other, $multiplier);
    }
}

if (! function_exists('ns_layoutxaxisanchor_constraint_greater_than_or_equal_to_system_spacing_after_anchor')) {
    function ns_layoutxaxisanchor_constraint_greater_than_or_equal_to_system_spacing_after_anchor(int $anchor, int $other, float $multiplier): int
    {
        return NSLayoutXAxisAnchor::constraintGreaterThanOrEqualToSystemSpacingAfterAnchor($anchor, $other, $multiplier);
    }
}

if (! function_exists('ns_layoutxaxisanchor_constraint_less_than_or_equal_to_system_spacing_after_anchor')) {
    function ns_layoutxaxisanchor_constraint_less_than_or_equal_to_system_spacing_after_anchor(int $anchor, int $other, float $multiplier): int
    {
        return NSLayoutXAxisAnchor::constraintLessThanOrEqualToSystemSpacingAfterAnchor($anchor, $other, $multiplier);
    }
}
