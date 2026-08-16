<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSFocusRingPlacement` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum FocusRingPlacement: int
{
    case FOCUS_RING_ONLY = 0;
    case FOCUS_RING_BELOW = 1;
    case FOCUS_RING_ABOVE = 2;
}
