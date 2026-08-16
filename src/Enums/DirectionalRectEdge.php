<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSDirectionalRectEdge` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum DirectionalRectEdge: int
{
    case NONE = 0;
    case TOP = 1;
    case LEADING = 2;
    case BOTTOM = 4;
    case TRAILING = 8;
    case ALL = 5;
}
