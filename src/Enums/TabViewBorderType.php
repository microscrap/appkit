<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTabViewBorderType` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum TabViewBorderType: int
{
    case NONE = 0;
    case LINE = 1;
    case BEZEL = 2;
}
