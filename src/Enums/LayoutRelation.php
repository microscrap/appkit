<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSLayoutRelation` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum LayoutRelation: int
{
    case LESS_THAN_OR_EQUAL = -1;
    case EQUAL = 0;
    case GREATER_THAN_OR_EQUAL = 1;
}
