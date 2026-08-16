<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSEventButtonMask` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum EventButtonMask: int
{
    case PEN_TIP = 0;
    case PEN_LOWER_SIDE = 1;
    case PEN_UPPER_SIDE = 2;
}
