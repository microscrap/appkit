<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSSpellingState` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum SpellingState: int
{
    case SPELLING_FLAG = 0;
    case GRAMMAR_FLAG = 1;
}
