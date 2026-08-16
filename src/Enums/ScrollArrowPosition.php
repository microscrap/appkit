<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSScrollArrowPosition` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum ScrollArrowPosition: int
{
    case SCROLLER_ARROWS_MAX_END = 0;
    case SCROLLER_ARROWS_MIN_END = 1;
    case SCROLLER_ARROWS_NONE = 2;
}
