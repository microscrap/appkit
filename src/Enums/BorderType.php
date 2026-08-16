<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSBorderType` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum BorderType: int
{
    case NO_BORDER = 0;
    case LINE_BORDER = 1;
    case BEZEL_BORDER = 2;
    case GROOVE_BORDER = 3;
}
