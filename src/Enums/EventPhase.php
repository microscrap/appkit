<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSEventPhase` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum EventPhase: int
{
    case NONE = 0;
    case BEGAN = 1;
    case STATIONARY = 2;
    case CHANGED = 3;
    case ENDED = 4;
    case CANCELLED = 5;
    case MAY_BEGIN = 6;
}
