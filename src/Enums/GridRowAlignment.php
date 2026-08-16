<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSGridRowAlignment` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum GridRowAlignment: int
{
    case INHERITED = 0;
    case NONE = 1;
    case FIRST_BASELINE = 2;
    case LAST_BASELINE = 3;
}
