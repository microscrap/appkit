<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSControlCharacterAction` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum ControlCharacterAction: int
{
    case ZERO_ADVANCEMENT = 0;
    case WHITESPACE = 1;
    case HORIZONTAL_TAB = 2;
    case LINE_BREAK = 3;
    case PARAGRAPH_BREAK = 4;
    case CONTAINER_BREAK = 5;
}
