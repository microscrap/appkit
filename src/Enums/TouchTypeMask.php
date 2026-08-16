<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTouchTypeMask` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum TouchTypeMask: int
{
    case DIRECT = 0;
    case INDIRECT = 1;
}
