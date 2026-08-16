<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSSelectionGranularity` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum SelectionGranularity: int
{
    case SELECT_BY_CHARACTER = 0;
    case SELECT_BY_WORD = 1;
    case SELECT_BY_PARAGRAPH = 2;
}
