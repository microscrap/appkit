<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** Values for ns_color_standard / NSColor::standard. */
enum ColorKind: int
{
    case BLACK = 0;
    case DARK_GRAY = 1;
    case LIGHT_GRAY = 2;
    case WHITE = 3;
    case GRAY = 4;
    case RED = 5;
    case GREEN = 6;
    case BLUE = 7;
    case CYAN = 8;
    case YELLOW = 9;
    case MAGENTA = 10;
    case ORANGE = 11;
    case PURPLE = 12;
    case BROWN = 13;
    case CLEAR = 14;
    case LABEL = 15;
    case SECONDARY_LABEL = 16;
    case CONTROL_ACCENT = 17;
    case TEXT = 18;
    case CONTROL = 19;
    case WINDOW_BACKGROUND = 20;
    case SEPARATOR = 21;
}
