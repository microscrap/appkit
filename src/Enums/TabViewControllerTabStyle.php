<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTabViewControllerTabStyle` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum TabViewControllerTabStyle: int
{
    case SEGMENTED_CONTROL_ON_TOP = 0;
    case SEGMENTED_CONTROL_ON_BOTTOM = 1;
    case TOOLBAR = 2;
    case UNSPECIFIED = -1;
}
