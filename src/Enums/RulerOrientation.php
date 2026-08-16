<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSRulerOrientation` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum RulerOrientation: int
{
    case HORIZONTAL_RULER = 0;
    case VERTICAL_RULER = 1;
}
