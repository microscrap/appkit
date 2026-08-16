<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTextAlignment` (NSInteger). Current macOS ABI (`TARGET_ABI_USES_IOS_VALUES`): LEFT=0 CENTER=1 RIGHT=2. Pass `::CASE->value` into ns_* ints. */
enum TextAlignment: int
{
    case LEFT = 0;
    case CENTER = 1;
    case RIGHT = 2;
    case JUSTIFIED = 3;
    case NATURAL = 4;
}
