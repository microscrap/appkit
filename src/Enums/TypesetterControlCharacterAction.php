<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTypesetterControlCharacterAction` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum TypesetterControlCharacterAction: int
{
    case TYPESETTER_ZERO_ADVANCEMENT_ACTION = 0;
    case TYPESETTER_WHITESPACE_ACTION = 1;
    case TYPESETTER_HORIZONTAL_TAB_ACTION = 2;
    case TYPESETTER_LINE_BREAK_ACTION = 3;
    case TYPESETTER_PARAGRAPH_BREAK_ACTION = 4;
    case TYPESETTER_CONTAINER_BREAK_ACTION = 5;
}
