<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSSegmentStyle` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum SegmentStyle: int
{
    case AUTOMATIC = 0;
    case ROUNDED = 1;
    case ROUND_RECT = 3;
    case TEXTURED_SQUARE = 4;
    case SMALL_SQUARE = 6;
    case SEPARATED = 8;
    case TEXTURED_ROUNDED = 2;
    case CAPSULE = 5;
}
