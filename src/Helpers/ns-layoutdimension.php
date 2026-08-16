<?php

use AppKit\NS\NSLayoutDimension\NSLayoutDimension;

/*
| NSLayoutDimension helpers — 1:1 over AppKit\NS\NSLayoutDimension\NSLayoutDimension
*/

if (! function_exists('ns_layoutdimension_constraint_equal_to_constant')) {
    function ns_layoutdimension_constraint_equal_to_constant(int $anchor, float $constant): int
    {
        return NSLayoutDimension::constraintEqualToConstant($anchor, $constant);
    }
}

if (! function_exists('ns_layoutdimension_constraint_greater_than_or_equal_to_constant')) {
    function ns_layoutdimension_constraint_greater_than_or_equal_to_constant(int $anchor, float $constant): int
    {
        return NSLayoutDimension::constraintGreaterThanOrEqualToConstant($anchor, $constant);
    }
}

if (! function_exists('ns_layoutdimension_constraint_less_than_or_equal_to_constant')) {
    function ns_layoutdimension_constraint_less_than_or_equal_to_constant(int $anchor, float $constant): int
    {
        return NSLayoutDimension::constraintLessThanOrEqualToConstant($anchor, $constant);
    }
}

if (! function_exists('ns_layoutdimension_constraint_equal_to_anchor')) {
    function ns_layoutdimension_constraint_equal_to_anchor(int $anchor, int $other, float $multiplier): int
    {
        return NSLayoutDimension::constraintEqualToAnchor($anchor, $other, $multiplier);
    }
}

if (! function_exists('ns_layoutdimension_constraint_greater_than_or_equal_to_anchor')) {
    function ns_layoutdimension_constraint_greater_than_or_equal_to_anchor(int $anchor, int $other, float $multiplier): int
    {
        return NSLayoutDimension::constraintGreaterThanOrEqualToAnchor($anchor, $other, $multiplier);
    }
}

if (! function_exists('ns_layoutdimension_constraint_less_than_or_equal_to_anchor')) {
    function ns_layoutdimension_constraint_less_than_or_equal_to_anchor(int $anchor, int $other, float $multiplier): int
    {
        return NSLayoutDimension::constraintLessThanOrEqualToAnchor($anchor, $other, $multiplier);
    }
}

if (! function_exists('ns_layoutdimension_constraint_equal_to_anchor_constant')) {
    function ns_layoutdimension_constraint_equal_to_anchor_constant(int $anchor, int $other, float $multiplier, float $constant): int
    {
        return NSLayoutDimension::constraintEqualToAnchorConstant($anchor, $other, $multiplier, $constant);
    }
}

if (! function_exists('ns_layoutdimension_constraint_greater_than_or_equal_to_anchor_constant')) {
    function ns_layoutdimension_constraint_greater_than_or_equal_to_anchor_constant(int $anchor, int $other, float $multiplier, float $constant): int
    {
        return NSLayoutDimension::constraintGreaterThanOrEqualToAnchorConstant($anchor, $other, $multiplier, $constant);
    }
}

if (! function_exists('ns_layoutdimension_constraint_less_than_or_equal_to_anchor_constant')) {
    function ns_layoutdimension_constraint_less_than_or_equal_to_anchor_constant(int $anchor, int $other, float $multiplier, float $constant): int
    {
        return NSLayoutDimension::constraintLessThanOrEqualToAnchorConstant($anchor, $other, $multiplier, $constant);
    }
}
