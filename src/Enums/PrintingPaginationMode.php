<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSPrintingPaginationMode` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum PrintingPaginationMode: int
{
    case AUTOMATIC = 0;
    case FIT = 1;
    case CLIP = 2;
}
