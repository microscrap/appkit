<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTabState` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum TabState: int
{
    case SELECTED_TAB = 0;
    case BACKGROUND_TAB = 1;
    case PRESSED_TAB = 2;
}
