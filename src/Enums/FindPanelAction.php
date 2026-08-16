<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSFindPanelAction` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum FindPanelAction: int
{
    case SHOW_FIND_PANEL = 1;
    case NEXT = 2;
    case PREVIOUS = 3;
    case REPLACE_ALL = 4;
    case REPLACE = 5;
    case REPLACE_AND_FIND = 6;
    case SET_FIND_STRING = 7;
    case REPLACE_ALL_IN_SELECTION = 8;
    case SELECT_ALL = 9;
    case SELECT_ALL_IN_SELECTION = 10;
}
