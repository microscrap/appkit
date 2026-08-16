<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSWindowSharingType` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum WindowSharingType: int
{
    case WINDOW_SHARING_NONE = 0;
    case WINDOW_SHARING_READ_ONLY = 1;
}
