<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSSelectionDirection` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum SelectionDirection: int
{
    case DIRECT_SELECTION = 0;
    case SELECTING_NEXT = 1;
    case SELECTING_PREVIOUS = 2;
}
