<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSAnimationBlockingMode` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum AnimationBlockingMode: int
{
    case ANIMATION_BLOCKING = 0;
    case ANIMATION_NONBLOCKING = 1;
    case ANIMATION_NONBLOCKING_THREADED = 2;
}
