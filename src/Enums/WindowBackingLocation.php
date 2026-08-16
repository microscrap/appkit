<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSWindowBackingLocation` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum WindowBackingLocation: int
{
    case DEFAULT = 0;
    case VIDEO_MEMORY = 1;
    case MAIN_MEMORY = 2;
}
