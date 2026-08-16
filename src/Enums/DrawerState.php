<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSDrawerState` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum DrawerState: int
{
    case DRAWER_CLOSED_STATE = 0;
    case DRAWER_OPENING_STATE = 1;
    case DRAWER_OPEN_STATE = 2;
    case DRAWER_CLOSING_STATE = 3;
}
