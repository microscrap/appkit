<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSToolbarDisplayMode` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum ToolbarDisplayMode: int
{
    case DEFAULT = 0;
    case ICON_AND_LABEL = 1;
    case ICON_ONLY = 2;
    case LABEL_ONLY = 3;
}
