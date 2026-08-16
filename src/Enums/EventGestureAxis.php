<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSEventGestureAxis` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum EventGestureAxis: int
{
    case NONE = 0;
    case HORIZONTAL = 1;
    case VERTICAL = 2;
}
