<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSAnimationEffect` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum AnimationEffect: int
{
    case DISAPPEARING_ITEM_DEFAULT = 0;
    case POOF = 10;
}
