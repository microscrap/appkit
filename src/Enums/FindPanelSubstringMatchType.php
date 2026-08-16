<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSFindPanelSubstringMatchType` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum FindPanelSubstringMatchType: int
{
    case CONTAINS = 0;
    case STARTS_WITH = 1;
    case FULL_WORD = 2;
    case ENDS_WITH = 3;
}
