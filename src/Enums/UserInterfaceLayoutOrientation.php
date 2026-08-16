<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSUserInterfaceLayoutOrientation` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum UserInterfaceLayoutOrientation: int
{
    case HORIZONTAL = 0;
    case VERTICAL = 1;
}
