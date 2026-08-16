<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTextInsertionIndicatorDisplayMode` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum TextInsertionIndicatorDisplayMode: int
{
    case AUTOMATIC = 0;
    case HIDDEN = 1;
    case VISIBLE = 2;
}
