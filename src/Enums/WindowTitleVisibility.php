<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSWindowTitleVisibility` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum WindowTitleVisibility: int
{
    case WINDOW_TITLE_VISIBLE = 0;
    case WINDOW_TITLE_HIDDEN = 1;
}
