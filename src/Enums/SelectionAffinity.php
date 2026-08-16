<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSSelectionAffinity` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum SelectionAffinity: int
{
    case UPSTREAM = 0;
    case DOWNSTREAM = 1;
}
