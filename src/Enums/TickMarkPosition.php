<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTickMarkPosition` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum TickMarkPosition: int
{
    case BELOW = 0;
    case ABOVE = 1;
}
