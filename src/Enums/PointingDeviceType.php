<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSPointingDeviceType` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum PointingDeviceType: int
{
    case UNKNOWN = 0;
    case PEN = 1;
    case CURSOR = 2;
    case ERASER = 3;
}
