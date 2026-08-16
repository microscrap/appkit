<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSMenuSelectionMode` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum MenuSelectionMode: int
{
    case AUTOMATIC = 0;
    case SELECT_ONE = 1;
    case SELECT_ANY = 2;
}
