<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSToolbarItemGroupControlRepresentation` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum ToolbarItemGroupControlRepresentation: int
{
    case AUTOMATIC = 0;
    case EXPANDED = 1;
    case COLLAPSED = 2;
}
