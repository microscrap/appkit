<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSAnimationCurve` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum AnimationCurve: int
{
    case ANIMATION_EASE_IN_OUT = 0;
    case ANIMATION_EASE_IN = 1;
    case ANIMATION_EASE_OUT = 2;
    case ANIMATION_LINEAR = 3;
}
