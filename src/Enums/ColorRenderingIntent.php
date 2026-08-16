<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSColorRenderingIntent` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum ColorRenderingIntent: int
{
    case DEFAULT = 0;
    case ABSOLUTE_COLORIMETRIC = 1;
    case RELATIVE_COLORIMETRIC = 2;
    case PERCEPTUAL = 3;
    case SATURATION = 4;
}
