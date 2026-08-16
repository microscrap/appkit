<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSAccessibilityCustomRotorType` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum AccessibilityCustomRotorType: int
{
    case CUSTOM = 0;
    case ANY = 1;
    case ANNOTATION = 2;
    case BOLD_TEXT = 3;
    case HEADING = 4;
    case HEADING_LEVEL_1 = 5;
    case HEADING_LEVEL_2 = 6;
    case HEADING_LEVEL_3 = 7;
    case HEADING_LEVEL_4 = 8;
    case HEADING_LEVEL_5 = 9;
    case HEADING_LEVEL_6 = 10;
    case IMAGE = 11;
    case ITALIC_TEXT = 12;
    case LANDMARK = 13;
    case LINK = 14;
    case LIST = 15;
    case MISSPELLED_WORD = 16;
    case TABLE = 17;
    case TEXT_FIELD = 18;
    case UNDERLINED_TEXT = 19;
    case VISITED_LINK = 20;
    case AUDIOGRAPH = 21;
}
