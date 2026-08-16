<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSHapticFeedbackPattern` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum HapticFeedbackPattern: int
{
    case GENERIC = 0;
    case ALIGNMENT = 1;
    case LEVEL_CHANGE = 2;
}
