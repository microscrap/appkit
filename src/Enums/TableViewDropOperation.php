<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTableViewDropOperation` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum TableViewDropOperation: int
{
    case TABLE_VIEW_DROP_ON = 0;
    case TABLE_VIEW_DROP_ABOVE = 1;
}
