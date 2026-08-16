<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTextSelectionNavigationModifier` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum TextSelectionNavigationModifier: int
{
    case EXTEND = 0;
    case VISUAL = 1;
    case MULTIPLE = 2;
}
