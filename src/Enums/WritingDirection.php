<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSWritingDirection` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum WritingDirection: int
{
    case NATURAL = -1;
    case LEFT_TO_RIGHT = 0;
    case RIGHT_TO_LEFT = 1;
}
