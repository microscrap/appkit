<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSAccessibilitySortDirection` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum AccessibilitySortDirection: int
{
    case UNKNOWN = 0;
    case ASCENDING = 1;
    case DESCENDING = 2;
}
