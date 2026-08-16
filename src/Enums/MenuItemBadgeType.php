<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSMenuItemBadgeType` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum MenuItemBadgeType: int
{
    case NONE = 0;
    case UPDATES = 1;
    case NEW_ITEMS = 2;
    case ALERTS = 3;
}
