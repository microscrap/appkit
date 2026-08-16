<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSRectAlignment` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum RectAlignment: int
{
    case NONE = 0;
    case TOP = 1;
    case TOP_LEADING = 2;
    case LEADING = 3;
    case BOTTOM_LEADING = 4;
    case BOTTOM = 5;
    case BOTTOM_TRAILING = 6;
    case TRAILING = 7;
    case TOP_TRAILING = 8;
}
