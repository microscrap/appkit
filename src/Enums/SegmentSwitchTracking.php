<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSSegmentSwitchTracking` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum SegmentSwitchTracking: int
{
    case SELECT_ONE = 0;
    case SELECT_ANY = 1;
    case MOMENTARY = 2;
    case MOMENTARY_ACCELERATOR = 3;
}
