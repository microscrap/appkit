<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSGlyphProperty` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum GlyphProperty: int
{
    case NULL = 0;
    case CONTROL_CHARACTER = 1;
    case ELASTIC = 2;
    case NON_BASE_CHARACTER = 3;
}
