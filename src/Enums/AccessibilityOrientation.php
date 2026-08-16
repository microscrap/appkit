<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSAccessibilityOrientation` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum AccessibilityOrientation: int
{
    case UNKNOWN = 0;
    case VERTICAL = 1;
    case HORIZONTAL = 2;
}
