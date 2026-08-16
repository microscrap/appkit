<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSStackViewGravity` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum StackViewGravity: int
{
    case TOP = 1;
    case CENTER = 2;
    case BOTTOM = 3;
}
