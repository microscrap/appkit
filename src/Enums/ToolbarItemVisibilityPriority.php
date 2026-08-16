<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSToolbarItemVisibilityPriority` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum ToolbarItemVisibilityPriority: int
{
    case LOW = -1000;
    case STANDARD = 0;
    case HIGH = 1000;
    case USER = 2000;
}
