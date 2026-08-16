<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTableViewStyle` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum TableViewStyle: int
{
    case AUTOMATIC = 0;
    case FULL_WIDTH = 1;
    case INSET = 2;
    case SOURCE_LIST = 3;
    case PLAIN = 4;
}
