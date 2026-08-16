<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** NSTextFinderAction — pass to ns_textfinder_perform_action / validate_action. */
enum TextFinderAction: int
{
    case SHOW_FIND_INTERFACE = 1;
    case NEXT_MATCH = 2;
    case PREVIOUS_MATCH = 3;
    case REPLACE_ALL = 4;
    case REPLACE = 5;
    case REPLACE_AND_FIND = 6;
    case SET_SEARCH_STRING = 7;
    case REPLACE_ALL_IN_SELECTION = 8;
    case SELECT_ALL = 9;
    case SELECT_ALL_IN_SELECTION = 10;
    case HIDE_FIND_INTERFACE = 11;
    case SHOW_REPLACE_INTERFACE = 12;
    case HIDE_REPLACE_INTERFACE = 13;
}
