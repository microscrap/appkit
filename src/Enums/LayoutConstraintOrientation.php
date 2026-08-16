<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSLayoutConstraintOrientation` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum LayoutConstraintOrientation: int
{
    case HORIZONTAL = 0;
    case VERTICAL = 1;
}
