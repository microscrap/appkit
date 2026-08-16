<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSWindowOrderingMode` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum WindowOrderingMode: int
{
    case WINDOW_ABOVE = 1;
    case WINDOW_BELOW = -1;
    case WINDOW_OUT = 0;
}
