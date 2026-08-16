<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSAlertStyle` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum AlertStyle: int
{
    case WARNING = 0;
    case INFORMATIONAL = 1;
    case CRITICAL = 2;
}
