<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSPathStyle` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum PathStyle: int
{
    case STANDARD = 0;
    case POP_UP = 2;
    case NAVIGATION_BAR = 1;
}
