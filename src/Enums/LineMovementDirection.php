<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSLineMovementDirection` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum LineMovementDirection: int
{
    case LINE_DOESNT_MOVE = 0;
    case LINE_MOVES_LEFT = 1;
    case LINE_MOVES_RIGHT = 2;
    case LINE_MOVES_DOWN = 3;
    case LINE_MOVES_UP = 4;
}
