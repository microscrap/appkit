<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSCellType` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum CellType: int
{
    case NULL_CELL_TYPE = 0;
    case TEXT_CELL_TYPE = 1;
    case IMAGE_CELL_TYPE = 2;
}
