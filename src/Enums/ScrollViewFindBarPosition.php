<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSScrollViewFindBarPosition` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum ScrollViewFindBarPosition: int
{
    case ABOVE_HORIZONTAL_RULER = 0;
    case ABOVE_CONTENT = 1;
    case BELOW_CONTENT = 2;
}
