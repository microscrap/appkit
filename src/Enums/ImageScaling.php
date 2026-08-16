<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSImageScaling` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum ImageScaling: int
{
    case IMAGE_SCALE_PROPORTIONALLY_DOWN = 0;
    case IMAGE_SCALE_AXES_INDEPENDENTLY = 1;
    case IMAGE_SCALE_NONE = 2;
    case IMAGE_SCALE_PROPORTIONALLY_UP_OR_DOWN = 3;
}
