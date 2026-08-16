<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSSplitViewItemCollapseBehavior` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum SplitViewItemCollapseBehavior: int
{
    case DEFAULT = 0;
    case PREFER_RESIZING_SPLIT_VIEW_WITH_FIXED_SIBLINGS = 1;
    case PREFER_RESIZING_SIBLINGS_WITH_FIXED_SPLIT_VIEW = 2;
    case USE_CONSTRAINTS = 3;
}
