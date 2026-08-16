<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSImageInterpolation` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum ImageInterpolation: int
{
    case DEFAULT = 0;
    case NONE = 1;
    case LOW = 2;
    case MEDIUM = 4;
    case HIGH = 3;
}
