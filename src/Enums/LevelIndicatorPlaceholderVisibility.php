<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSLevelIndicatorPlaceholderVisibility` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum LevelIndicatorPlaceholderVisibility: int
{
    case AUTOMATIC = 0;
    case ALWAYS = 1;
    case WHILE_EDITING = 2;
}
