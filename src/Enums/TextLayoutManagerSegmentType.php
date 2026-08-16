<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTextLayoutManagerSegmentType` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum TextLayoutManagerSegmentType: int
{
    case STANDARD = 0;
    case SELECTION = 1;
    case HIGHLIGHT = 2;
}
