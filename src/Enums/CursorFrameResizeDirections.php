<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSCursorFrameResizeDirections` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum CursorFrameResizeDirections: int
{
    case INWARD = 0;
    case OUTWARD = 1;
    case ALL = 2;
}
