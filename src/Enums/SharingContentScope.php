<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSSharingContentScope` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum SharingContentScope: int
{
    case ITEM = 0;
    case PARTIAL = 1;
    case FULL = 2;
}
