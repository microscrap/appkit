<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSEventSwipeTrackingOptions` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum EventSwipeTrackingOptions: int
{
    case EVENT_SWIPE_TRACKING_LOCK_DIRECTION = 0;
    case EVENT_SWIPE_TRACKING_CLAMP_GESTURE_AMOUNT = 1;
}
