<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSProgressIndicatorThickness` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum ProgressIndicatorThickness: int
{
    case PROGRESS_INDICATOR_PREFERRED_THICKNESS = 14;
    case PROGRESS_INDICATOR_PREFERRED_SMALL_THICKNESS = 10;
    case PROGRESS_INDICATOR_PREFERRED_LARGE_THICKNESS = 18;
    case PROGRESS_INDICATOR_PREFERRED_AQUA_THICKNESS = 12;
}
