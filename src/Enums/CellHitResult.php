<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSCellHitResult` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum CellHitResult: int
{
    case CELL_HIT_NONE = 0;
    case CELL_HIT_CONTENT_AREA = 1;
    case CELL_HIT_EDITABLE_TEXT_AREA = 2;
    case CELL_HIT_TRACKABLE_AREA = 4;
}
