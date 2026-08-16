<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSGradientType` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum GradientType: int
{
    case GRADIENT_NONE = 0;
    case GRADIENT_CONCAVE_WEAK = 1;
    case GRADIENT_CONCAVE_STRONG = 2;
    case GRADIENT_CONVEX_WEAK = 3;
    case GRADIENT_CONVEX_STRONG = 4;
}
