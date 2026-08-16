<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSLayoutAttribute` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum LayoutAttribute: int
{
    case LEFT = 1;
    case RIGHT = 2;
    case TOP = 3;
    case BOTTOM = 4;
    case LEADING = 5;
    case TRAILING = 6;
    case WIDTH = 7;
    case HEIGHT = 8;
    case CENTER_X = 9;
    case CENTER_Y = 10;
    case LAST_BASELINE = 11;
    case BASELINE = 12;
    case FIRST_BASELINE = 14;
    case LEFT_MARGIN = 15;
    case RIGHT_MARGIN = 16;
    case TOP_MARGIN = 17;
    case BOTTOM_MARGIN = 18;
    case LEADING_MARGIN = 19;
    case TRAILING_MARGIN = 20;
    case CENTER_X_WITHIN_MARGINS = 21;
    case CENTER_Y_WITHIN_MARGINS = 22;
    case NOT_AN_ATTRIBUTE = 0;
}
