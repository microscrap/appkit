<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSCellStyleMask` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum CellStyleMask: int
{
    case NO_CELL_MASK = 0;
    case CONTENTS_CELL_MASK = 1;
    case PUSH_IN_CELL_MASK = 2;
    case CHANGE_GRAY_CELL_MASK = 4;
    case CHANGE_BACKGROUND_CELL_MASK = 8;
}
