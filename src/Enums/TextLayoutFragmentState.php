<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTextLayoutFragmentState` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum TextLayoutFragmentState: int
{
    case NONE = 0;
    case ESTIMATED_USAGE_BOUNDS = 1;
    case CALCULATED_USAGE_BOUNDS = 2;
    case LAYOUT_AVAILABLE = 3;
}
