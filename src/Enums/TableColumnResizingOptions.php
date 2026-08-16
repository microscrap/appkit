<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTableColumnResizingOptions` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum TableColumnResizingOptions: int
{
    case TABLE_COLUMN_NO_RESIZING = 0;
    case TABLE_COLUMN_AUTORESIZING_MASK = 1;
    case TABLE_COLUMN_USER_RESIZING_MASK = 2;
}
