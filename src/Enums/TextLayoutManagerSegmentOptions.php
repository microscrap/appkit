<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTextLayoutManagerSegmentOptions` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum TextLayoutManagerSegmentOptions: int
{
    case NONE = 0;
    case RANGE_NOT_REQUIRED = 1;
    case MIDDLE_FRAGMENTS_EXCLUDED = 2;
    case HEAD_SEGMENT_EXTENDED = 3;
    case TAIL_SEGMENT_EXTENDED = 4;
    case UPSTREAM_AFFINITY = 5;
}
