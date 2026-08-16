<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTextMovement` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum TextMovement: int
{
    case RETURN = 0;
    case TAB = 1;
    case BACKTAB = 2;
    case LEFT = 3;
    case RIGHT = 4;
    case UP = 5;
    case DOWN = 6;
    case CANCEL = 7;
}
