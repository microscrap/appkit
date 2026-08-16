<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSHorizontalDirections` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum HorizontalDirections: int
{
    case LEFT = 0;
    case RIGHT = 1;
    case ALL = 2;
}
