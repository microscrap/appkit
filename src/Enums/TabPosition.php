<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTabPosition` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum TabPosition: int
{
    case NONE = 0;
    case TOP = 1;
    case LEFT = 2;
    case BOTTOM = 3;
    case RIGHT = 4;
}
