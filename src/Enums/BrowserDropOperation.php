<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSBrowserDropOperation` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum BrowserDropOperation: int
{
    case BROWSER_DROP_ON = 0;
    case BROWSER_DROP_ABOVE = 1;
}
