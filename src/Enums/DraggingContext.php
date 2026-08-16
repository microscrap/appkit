<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSDraggingContext` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum DraggingContext: int
{
    case OUTSIDE_APPLICATION = 0;
    case WITHIN_APPLICATION = 1;
}
