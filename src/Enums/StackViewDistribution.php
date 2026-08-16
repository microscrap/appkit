<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSStackViewDistribution` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum StackViewDistribution: int
{
    case GRAVITY_AREAS = -1;
    case FILL = 0;
    case FILL_EQUALLY = 1;
    case FILL_PROPORTIONALLY = 2;
    case EQUAL_SPACING = 3;
    case EQUAL_CENTERING = 4;
}
