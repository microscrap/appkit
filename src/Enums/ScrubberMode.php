<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSScrubberMode` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum ScrubberMode: int
{
    case FIXED = 0;
    case FREE = 1;
}
