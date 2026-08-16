<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSApplicationActivationPolicy` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum ApplicationActivationPolicy: int
{
    case REGULAR = 0;
    case ACCESSORY = 1;
    case PROHIBITED = 2;
}
