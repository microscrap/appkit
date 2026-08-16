<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSScrollerArrow` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum ScrollerArrow: int
{
    case SCROLLER_INCREMENT_ARROW = 0;
    case SCROLLER_DECREMENT_ARROW = 1;
}
