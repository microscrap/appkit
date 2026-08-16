<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTextScalingType` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum TextScalingType: int
{
    case TEXT_SCALING_STANDARD = 0;
    case TEXT_SCALINGI_OS = 1;
}
