<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSFocusRingType` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum FocusRingType: int
{
    case DEFAULT = 0;
    case NONE = 1;
    case EXTERIOR = 2;
}
