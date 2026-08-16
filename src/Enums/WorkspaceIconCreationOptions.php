<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSWorkspaceIconCreationOptions` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum WorkspaceIconCreationOptions: int
{
    case EXCLUDE_QUICK_DRAW_ELEMENTS_ICON_CREATION_OPTION = 2;
    case EXCLUDE_10_4_ELEMENTS_ICON_CREATION_OPTION = 4;
}
