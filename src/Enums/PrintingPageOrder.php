<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSPrintingPageOrder` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum PrintingPageOrder: int
{
    case DESCENDING_PAGE_ORDER = -1;
    case SPECIAL_PAGE_ORDER = 0;
    case ASCENDING_PAGE_ORDER = 1;
    case UNKNOWN_PAGE_ORDER = 2;
}
