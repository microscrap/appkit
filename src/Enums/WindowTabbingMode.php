<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSWindowTabbingMode` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum WindowTabbingMode: int
{
    case AUTOMATIC = 0;
    case PREFERRED = 1;
    case DISALLOWED = 2;
}
