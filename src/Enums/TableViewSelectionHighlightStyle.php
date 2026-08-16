<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTableViewSelectionHighlightStyle` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum TableViewSelectionHighlightStyle: int
{
    case NONE = -1;
    case REGULAR = 0;
    case SOURCE_LIST = 1;
}
