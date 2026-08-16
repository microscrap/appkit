<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSBoxType` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum BoxType: int
{
    case BOX_PRIMARY = 0;
    case BOX_SEPARATOR = 2;
    case BOX_CUSTOM = 4;
}
