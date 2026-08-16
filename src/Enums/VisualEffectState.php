<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSVisualEffectState` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum VisualEffectState: int
{
    case FOLLOWS_WINDOW_ACTIVE_STATE = 0;
    case ACTIVE = 1;
    case INACTIVE = 2;
}
