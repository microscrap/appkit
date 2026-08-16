<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSImageSymbolScale` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum ImageSymbolScale: int
{
    case SMALL = 1;
    case MEDIUM = 2;
    case LARGE = 3;
}
