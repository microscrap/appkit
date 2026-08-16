<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSLineSweepDirection` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum LineSweepDirection: int
{
    case LINE_SWEEP_LEFT = 0;
    case LINE_SWEEP_RIGHT = 1;
    case LINE_SWEEP_DOWN = 2;
    case LINE_SWEEP_UP = 3;
}
