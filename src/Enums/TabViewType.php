<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTabViewType` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum TabViewType: int
{
    case TOP_TABS_BEZEL_BORDER = 0;
    case LEFT_TABS_BEZEL_BORDER = 1;
    case BOTTOM_TABS_BEZEL_BORDER = 2;
    case RIGHT_TABS_BEZEL_BORDER = 3;
    case NO_TABS_BEZEL_BORDER = 4;
    case NO_TABS_LINE_BORDER = 5;
    case NO_TABS_NO_BORDER = 6;
}
