<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSCellImagePosition` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum CellImagePosition: int
{
    case NO_IMAGE = 0;
    case IMAGE_ONLY = 1;
    case IMAGE_LEFT = 2;
    case IMAGE_RIGHT = 3;
    case IMAGE_BELOW = 4;
    case IMAGE_ABOVE = 5;
    case IMAGE_OVERLAPS = 6;
    case IMAGE_LEADING = 7;
    case IMAGE_TRAILING = 8;
}
