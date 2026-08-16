<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTableViewRowActionStyle` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum TableViewRowActionStyle: int
{
    case REGULAR = 0;
    case DESTRUCTIVE = 1;
}
