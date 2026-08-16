<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSPrintRenderingQuality` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum PrintRenderingQuality: int
{
    case BEST = 0;
    case RESPONSIVE = 1;
}
