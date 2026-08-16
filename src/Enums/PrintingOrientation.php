<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSPrintingOrientation` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum PrintingOrientation: int
{
    case PORTRAIT_ORIENTATION = 0;
    case LANDSCAPE_ORIENTATION = 1;
}
