<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSImageAlignment` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum ImageAlignment: int
{
    case IMAGE_ALIGN_CENTER = 0;
    case IMAGE_ALIGN_TOP = 1;
    case IMAGE_ALIGN_TOP_LEFT = 2;
    case IMAGE_ALIGN_TOP_RIGHT = 3;
    case IMAGE_ALIGN_LEFT = 4;
    case IMAGE_ALIGN_BOTTOM = 5;
    case IMAGE_ALIGN_BOTTOM_LEFT = 6;
    case IMAGE_ALIGN_BOTTOM_RIGHT = 7;
    case IMAGE_ALIGN_RIGHT = 8;
}
