<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSLineCapStyle` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum LineCapStyle: int
{
    case BUTT = 0;
    case ROUND = 1;
    case SQUARE = 2;
}
