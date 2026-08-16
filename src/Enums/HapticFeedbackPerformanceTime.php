<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSHapticFeedbackPerformanceTime` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum HapticFeedbackPerformanceTime: int
{
    case DEFAULT = 0;
    case NOW = 1;
    case DRAW_COMPLETED = 2;
}
