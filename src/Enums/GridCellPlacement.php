<?php

namespace Microscrap\Bindings\AppKit\Enums;

/**
 * AppKit `NSGridCellPlacement` (NSInteger). Pass `::CASE->value` into ns_* ints.
 * Apple aliases TOP=LEADING (2) and BOTTOM=TRAILING (3); PHP keeps the first name.
 */
enum GridCellPlacement: int
{
    case INHERITED = 0;
    case NONE = 1;
    case LEADING = 2;
    case TRAILING = 3;
    case CENTER = 4;
    case FILL = 5;
}
