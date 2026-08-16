<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTextInsertionIndicatorAutomaticModeOptions` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum TextInsertionIndicatorAutomaticModeOptions: int
{
    case SHOW_EFFECTS_VIEW = 1;
    case SHOW_WHILE_TRACKING = 2;
}
