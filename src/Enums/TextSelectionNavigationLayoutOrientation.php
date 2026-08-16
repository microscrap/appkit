<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTextSelectionNavigationLayoutOrientation` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum TextSelectionNavigationLayoutOrientation: int
{
    case HORIZONTAL = 0;
    case VERTICAL = 1;
}
