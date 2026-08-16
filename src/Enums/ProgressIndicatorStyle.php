<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSProgressIndicatorStyle` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum ProgressIndicatorStyle: int
{
    case BAR = 0;
    case SPINNING = 1;
}
