<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSSegmentDistribution` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum SegmentDistribution: int
{
    case FIT = 0;
    case FILL = 1;
    case FILL_EQUALLY = 2;
    case FILL_PROPORTIONALLY = 3;
}
