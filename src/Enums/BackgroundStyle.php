<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSBackgroundStyle` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum BackgroundStyle: int
{
    case NORMAL = 0;
    case EMPHASIZED = 1;
    case RAISED = 2;
    case LOWERED = 3;
}
