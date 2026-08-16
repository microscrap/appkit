<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSColorSystemEffect` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum ColorSystemEffect: int
{
    case NONE = 0;
    case PRESSED = 1;
    case DEEP_PRESSED = 2;
    case DISABLED = 3;
    case ROLLOVER = 4;
}
