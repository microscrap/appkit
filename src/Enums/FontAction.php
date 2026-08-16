<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** NSFontAction from ns_fontmanager_current_font_action. */
enum FontAction: int
{
    case NO_FONT_CHANGE = 0;
    case VIA_PANEL = 1;
    case ADD_TRAIT = 2;
    case SIZE_UP = 3;
    case SIZE_DOWN = 4;
    case HEAVIER = 5;
    case LIGHTER = 6;
    case REMOVE_TRAIT = 7;
}
