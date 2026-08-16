<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSBrowserColumnResizingType` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum BrowserColumnResizingType: int
{
    case BROWSER_NO_COLUMN_RESIZING = 0;
    case BROWSER_AUTO_COLUMN_RESIZING = 1;
    case BROWSER_USER_COLUMN_RESIZING = 2;
}
