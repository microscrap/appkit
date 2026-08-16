<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSVerticalDirections` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum VerticalDirections: int
{
    case UP = 0;
    case DOWN = 1;
    case ALL = 2;
}
