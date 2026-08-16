<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSScrollerKnobStyle` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum ScrollerKnobStyle: int
{
    case DEFAULT = 0;
    case DARK = 1;
    case LIGHT = 2;
}
