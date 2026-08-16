<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSPageControllerTransitionStyle` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum PageControllerTransitionStyle: int
{
    case STACK_HISTORY = 0;
    case STACK_BOOK = 1;
    case HORIZONTAL_STRIP = 2;
}
