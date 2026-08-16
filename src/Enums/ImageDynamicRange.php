<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSImageDynamicRange` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum ImageDynamicRange: int
{
    case UNSPECIFIED = -1;
    case STANDARD = 0;
    case CONSTRAINED_HIGH = 1;
    case HIGH = 2;
}
