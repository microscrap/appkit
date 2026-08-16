<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSAccessibilityRulerMarkerType` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum AccessibilityRulerMarkerType: int
{
    case UNKNOWN = 0;
    case TAB_STOP_LEFT = 1;
    case TAB_STOP_RIGHT = 2;
    case TAB_STOP_CENTER = 3;
    case TAB_STOP_DECIMAL = 4;
    case INDENT_HEAD = 5;
    case INDENT_TAIL = 6;
    case INDENT_FIRST_LINE = 7;
}
