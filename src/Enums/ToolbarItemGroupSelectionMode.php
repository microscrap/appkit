<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSToolbarItemGroupSelectionMode` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum ToolbarItemGroupSelectionMode: int
{
    case SELECT_ONE = 0;
    case SELECT_ANY = 1;
    case MOMENTARY = 2;
}
