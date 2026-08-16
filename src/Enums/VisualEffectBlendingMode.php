<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSVisualEffectBlendingMode` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum VisualEffectBlendingMode: int
{
    case BEHIND_WINDOW = 0;
    case WITHIN_WINDOW = 1;
}
