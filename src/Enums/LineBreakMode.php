<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSLineBreakMode` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum LineBreakMode: int
{
    case LINE_BREAK_BY_WORD_WRAPPING = 0;
    case LINE_BREAK_BY_CHAR_WRAPPING = 1;
    case LINE_BREAK_BY_CLIPPING = 2;
    case LINE_BREAK_BY_TRUNCATING_HEAD = 3;
    case LINE_BREAK_BY_TRUNCATING_TAIL = 4;
    case LINE_BREAK_BY_TRUNCATING_MIDDLE = 5;
}
