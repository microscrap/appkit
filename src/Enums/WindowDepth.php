<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSWindowDepth` (int32_t). Pass `::CASE->value` into ns_* ints. */
enum WindowDepth: int
{
    case TWENTYFOUR_BIT_RGB = 0;
    case SIXTYFOUR_BIT_RGB = 1;
    case ONEHUNDREDTWENTYEIGHT_BIT_RGB = 2;
}
