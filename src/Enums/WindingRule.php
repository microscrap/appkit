<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSWindingRule` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum WindingRule: int
{
    case NON_ZERO = 0;
    case EVEN_ODD = 1;
}
