<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSPasteboardAccessBehavior` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum PasteboardAccessBehavior: int
{
    case DEFAULT = 0;
    case ASK = 1;
    case ALWAYS_ALLOW = 2;
    case ALWAYS_DENY = 3;
}
