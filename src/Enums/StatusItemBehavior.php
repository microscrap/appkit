<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSStatusItemBehavior` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum StatusItemBehavior: int
{
    case REMOVAL_ALLOWED = 0;
    case TERMINATION_ON_REMOVAL = 1;
}
