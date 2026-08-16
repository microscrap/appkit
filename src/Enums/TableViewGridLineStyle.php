<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTableViewGridLineStyle` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum TableViewGridLineStyle: int
{
    case TABLE_VIEW_GRID_NONE = 0;
    case TABLE_VIEW_SOLID_VERTICAL_GRID_LINE_MASK = 1;
    case TABLE_VIEW_SOLID_HORIZONTAL_GRID_LINE_MASK = 2;
    case TABLE_VIEW_DASHED_HORIZONTAL_GRID_LINE_MASK = 8;
}
