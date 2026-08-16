<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTableViewRowSizeStyle` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum TableViewRowSizeStyle: int
{
    case DEFAULT = -1;
    case CUSTOM = 0;
    case SMALL = 1;
    case MEDIUM = 2;
    case LARGE = 3;
}
