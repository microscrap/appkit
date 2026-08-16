<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSSliderType` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum SliderType: int
{
    case LINEAR = 0;
    case CIRCULAR = 1;
}
