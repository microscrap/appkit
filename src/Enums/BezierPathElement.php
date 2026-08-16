<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSBezierPathElement` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum BezierPathElement: int
{
    case MOVE_TO = 0;
    case LINE_TO = 1;
    case CUBIC_CURVE_TO = 2;
    case CLOSE_PATH = 3;
    case QUADRATIC_CURVE_TO = 4;
}
