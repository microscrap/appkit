<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSPopoverAppearance` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum PopoverAppearance: int
{
    case MINIMAL = 0;
    case HUD = 1;
}
