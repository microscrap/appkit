<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSUnderlineStyle` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum UnderlineStyle: int
{
    case NONE = 0;
    case SINGLE = 1;
    case THICK = 2;
    case DOUBLE = 3;
    case PATTERN_SOLID = 4;
    case PATTERN_DOT = 5;
    case PATTERN_DASH = 6;
    case PATTERN_DASH_DOT = 7;
    case PATTERN_DASH_DOT_DOT = 8;
    case BY_WORD = 9;
}
