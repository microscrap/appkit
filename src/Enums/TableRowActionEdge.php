<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTableRowActionEdge` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum TableRowActionEdge: int
{
    case LEADING = 0;
    case TRAILING = 1;
}
