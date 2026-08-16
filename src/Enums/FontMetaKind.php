<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** Values for ns_font_meta / NSFont::meta. */
enum FontMetaKind: int
{
    case SYSTEM = 0;
    case BOLD_SYSTEM = 1;
    case LABEL = 2;
    case TITLE_BAR = 3;
    case MENU = 4;
    case MENU_BAR = 5;
    case MESSAGE = 6;
    case PALETTE = 7;
    case TOOL_TIPS = 8;
    case CONTROL_CONTENT = 9;
    case USER = 10;
    case USER_FIXED_PITCH = 11;
}
