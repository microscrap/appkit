<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSWindowUserTabbingPreference` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum WindowUserTabbingPreference: int
{
    case MANUAL = 0;
    case ALWAYS = 1;
    case IN_FULL_SCREEN = 2;
}
