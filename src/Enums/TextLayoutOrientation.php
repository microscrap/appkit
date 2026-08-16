<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTextLayoutOrientation` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum TextLayoutOrientation: int
{
    case HORIZONTAL = 0;
    case VERTICAL = 1;
}
