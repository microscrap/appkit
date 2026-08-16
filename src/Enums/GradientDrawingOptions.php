<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSGradientDrawingOptions` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum GradientDrawingOptions: int
{
    case GRADIENT_DRAWS_BEFORE_STARTING_LOCATION = 0;
    case GRADIENT_DRAWS_AFTER_ENDING_LOCATION = 1;
}
