<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSPressureBehavior` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum PressureBehavior: int
{
    case UNKNOWN = -1;
    case PRIMARY_DEFAULT = 0;
    case PRIMARY_CLICK = 1;
    case PRIMARY_GENERIC = 2;
    case PRIMARY_ACCELERATOR = 3;
    case PRIMARY_DEEP_CLICK = 5;
    case PRIMARY_DEEP_DRAG = 6;
}
