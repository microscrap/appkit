<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSLineJoinStyle` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum LineJoinStyle: int
{
    case MITER = 0;
    case ROUND = 1;
    case BEVEL = 2;
}
