<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTableViewDraggingDestinationFeedbackStyle` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum TableViewDraggingDestinationFeedbackStyle: int
{
    case NONE = -1;
    case REGULAR = 0;
    case SOURCE_LIST = 1;
    case GAP = 2;
}
