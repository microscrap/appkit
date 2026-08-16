<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSImageResizingMode` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum ImageResizingMode: int
{
    case STRETCH = 0;
    case TILE = 1;
}
