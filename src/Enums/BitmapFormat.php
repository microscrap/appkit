<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSBitmapFormat` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum BitmapFormat: int
{
    case ALPHA_FIRST = 1;
    case ALPHA_NONPREMULTIPLIED = 2;
    case FLOATING_POINT_SAMPLES = 4;
    case SIXTEEN_BIT_LITTLE_ENDIAN = 3;
    case SIXTEEN_BIT_BIG_ENDIAN = 5;
    case THIRTY_TWO_BIT_BIG_ENDIAN = 6;
}
