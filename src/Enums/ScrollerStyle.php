<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSScrollerStyle` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum ScrollerStyle: int
{
    case LEGACY = 0;
    case OVERLAY = 1;
}
