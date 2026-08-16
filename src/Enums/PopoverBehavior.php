<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSPopoverBehavior` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum PopoverBehavior: int
{
    case APPLICATION_DEFINED = 0;
    case TRANSIENT = 1;
    case SEMITRANSIENT = 2;
}
