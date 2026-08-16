<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSAccessibilityUnits` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum AccessibilityUnits: int
{
    case UNKNOWN = 0;
    case INCHES = 1;
    case CENTIMETERS = 2;
    case POINTS = 3;
    case PICAS = 4;
}
