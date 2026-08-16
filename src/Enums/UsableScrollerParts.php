<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSUsableScrollerParts` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum UsableScrollerParts: int
{
    case NO_SCROLLER_PARTS = 0;
    case ONLY_SCROLLER_ARROWS = 1;
    case ALL_SCROLLER_PARTS = 2;
}
