<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSSpringLoadingHighlight` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum SpringLoadingHighlight: int
{
    case NONE = 0;
    case STANDARD = 1;
    case EMPHASIZED = 2;
}
