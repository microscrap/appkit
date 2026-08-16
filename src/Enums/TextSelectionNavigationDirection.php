<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTextSelectionNavigationDirection` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum TextSelectionNavigationDirection: int
{
    case FORWARD = 0;
    case BACKWARD = 1;
    case RIGHT = 2;
    case LEFT = 3;
    case UP = 4;
    case DOWN = 5;
}
