<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTextSelectionNavigationDestination` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum TextSelectionNavigationDestination: int
{
    case CHARACTER = 0;
    case WORD = 1;
    case LINE = 2;
    case SENTENCE = 3;
    case PARAGRAPH = 4;
    case CONTAINER = 5;
    case DOCUMENT = 6;
}
