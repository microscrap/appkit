<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTextFinderMatchingType` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum TextFinderMatchingType: int
{
    case CONTAINS = 0;
    case STARTS_WITH = 1;
    case FULL_WORD = 2;
    case ENDS_WITH = 3;
}
