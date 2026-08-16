<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSPageLayoutResult` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum PageLayoutResult: int
{
    case CANCELLED = 0;
    case CHANGED = 1;
}
