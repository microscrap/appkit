<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSDisplayGamut` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum DisplayGamut: int
{
    case SRGB = 1;
    case P_3 = 2;
}
