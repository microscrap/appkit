<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTitlePosition` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum TitlePosition: int
{
    case NO_TITLE = 0;
    case ABOVE_TOP = 1;
    case AT_TOP = 2;
    case BELOW_TOP = 3;
    case ABOVE_BOTTOM = 4;
    case AT_BOTTOM = 5;
    case BELOW_BOTTOM = 6;
}
