<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSWindowToolbarStyle` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum WindowToolbarStyle: int
{
    case AUTOMATIC = 0;
    case EXPANDED = 1;
    case PREFERENCE = 2;
    case UNIFIED = 3;
    case UNIFIED_COMPACT = 4;
}
