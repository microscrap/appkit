<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTextTabType` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum TextTabType: int
{
    case LEFT_TAB_STOP_TYPE = 0;
    case RIGHT_TAB_STOP_TYPE = 1;
    case CENTER_TAB_STOP_TYPE = 2;
    case DECIMAL_TAB_STOP_TYPE = 3;
}
