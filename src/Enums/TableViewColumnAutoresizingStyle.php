<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTableViewColumnAutoresizingStyle` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum TableViewColumnAutoresizingStyle: int
{
    case TABLE_VIEW_NO_COLUMN_AUTORESIZING = 0;
    case TABLE_VIEW_UNIFORM_COLUMN_AUTORESIZING_STYLE = 1;
    case TABLE_VIEW_SEQUENTIAL_COLUMN_AUTORESIZING_STYLE = 2;
    case TABLE_VIEW_REVERSE_SEQUENTIAL_COLUMN_AUTORESIZING_STYLE = 3;
    case TABLE_VIEW_LAST_COLUMN_ONLY_AUTORESIZING_STYLE = 4;
    case TABLE_VIEW_FIRST_COLUMN_ONLY_AUTORESIZING_STYLE = 5;
}
