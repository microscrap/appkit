<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSPopUpArrowPosition` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum PopUpArrowPosition: int
{
    case POP_UP_NO_ARROW = 0;
    case POP_UP_ARROW_AT_CENTER = 1;
    case POP_UP_ARROW_AT_BOTTOM = 2;
}
