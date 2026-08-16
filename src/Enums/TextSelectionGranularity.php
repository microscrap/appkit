<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTextSelectionGranularity` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum TextSelectionGranularity: int
{
    case CHARACTER = 0;
    case WORD = 1;
    case PARAGRAPH = 2;
    case LINE = 3;
    case SENTENCE = 4;
}
