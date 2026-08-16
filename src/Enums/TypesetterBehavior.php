<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTypesetterBehavior` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum TypesetterBehavior: int
{
    case TYPESETTER_LATEST_BEHAVIOR = -1;
    case TYPESETTER_ORIGINAL_BEHAVIOR = 0;
    case N_10_2_WITH_COMPATIBILITY = 1;
    case N_10_2 = 2;
    case N_10_3 = 3;
    case N_10_4 = 4;
}
