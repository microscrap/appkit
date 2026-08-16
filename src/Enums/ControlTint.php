<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSControlTint` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum ControlTint: int
{
    case DEFAULT_CONTROL_TINT = 0;
    case BLUE_CONTROL_TINT = 1;
    case GRAPHITE_CONTROL_TINT = 6;
    case CLEAR_CONTROL_TINT = 7;
}
