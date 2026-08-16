<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSBackingStoreType` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum BackingStoreType: int
{
    case BACKING_STORE_RETAINED = 0;
    case BACKING_STORE_NONRETAINED = 1;
    case BACKING_STORE_BUFFERED = 2;
}
