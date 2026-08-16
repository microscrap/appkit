<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSSplitViewItemBehavior` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum SplitViewItemBehavior: int
{
    case DEFAULT = 0;
    case SIDEBAR = 1;
    case CONTENT_LIST = 2;
    case INSPECTOR = 3;
}
