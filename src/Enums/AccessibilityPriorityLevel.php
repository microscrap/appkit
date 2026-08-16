<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSAccessibilityPriorityLevel` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum AccessibilityPriorityLevel: int
{
    case ACCESSIBILITY_PRIORITY_LOW = 10;
    case ACCESSIBILITY_PRIORITY_MEDIUM = 50;
    case ACCESSIBILITY_PRIORITY_HIGH = 90;
}
