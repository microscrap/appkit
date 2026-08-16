<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSAccessibilityAnnotationPosition` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum AccessibilityAnnotationPosition: int
{
    case FULL_RANGE = 0;
    case START = 1;
    case END = 2;
}
