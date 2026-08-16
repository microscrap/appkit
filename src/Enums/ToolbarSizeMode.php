<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSToolbarSizeMode` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum ToolbarSizeMode: int
{
    case DEFAULT = 0;
    case REGULAR = 1;
    case SMALL = 2;
}
