<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSScrubberAlignment` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum ScrubberAlignment: int
{
    case NONE = 0;
    case LEADING = 1;
    case TRAILING = 2;
    case CENTER = 3;
}
