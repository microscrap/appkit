<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSUserInterfaceLayoutDirection` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum UserInterfaceLayoutDirection: int
{
    case LEFT_TO_RIGHT = 0;
    case RIGHT_TO_LEFT = 1;
}
