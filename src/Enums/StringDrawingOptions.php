<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSStringDrawingOptions` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum StringDrawingOptions: int
{
    case STRING_DRAWING_USES_LINE_FRAGMENT_ORIGIN = 1;
    case STRING_DRAWING_USES_FONT_LEADING = 2;
    case STRING_DRAWING_USES_DEVICE_METRICS = 8;
    case STRING_DRAWING_TRUNCATES_LAST_VISIBLE_LINE = 32;
    case STRING_DRAWING_DISABLE_SCREEN_FONT_SUBSTITUTION = 4;
    case STRING_DRAWING_ONE_SHOT = 5;
}
