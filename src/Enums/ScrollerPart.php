<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSScrollerPart` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum ScrollerPart: int
{
    case SCROLLER_NO_PART = 0;
    case SCROLLER_DECREMENT_PAGE = 1;
    case SCROLLER_KNOB = 2;
    case SCROLLER_INCREMENT_PAGE = 3;
    case SCROLLER_DECREMENT_LINE = 4;
    case SCROLLER_INCREMENT_LINE = 5;
    case SCROLLER_KNOB_SLOT = 6;
}
