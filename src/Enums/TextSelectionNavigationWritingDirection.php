<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTextSelectionNavigationWritingDirection` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum TextSelectionNavigationWritingDirection: int
{
    case LEFT_TO_RIGHT = 0;
    case RIGHT_TO_LEFT = 1;
}
