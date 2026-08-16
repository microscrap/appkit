<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTextSelectionAffinity` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum TextSelectionAffinity: int
{
    case UPSTREAM = 0;
    case DOWNSTREAM = 1;
}
