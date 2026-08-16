<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSLineBreakStrategy` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum LineBreakStrategy: int
{
    case NONE = 0;
    case PUSH_OUT = 1;
    case HANGUL_WORD_PRIORITY = 2;
    case STANDARD = 3;
}
