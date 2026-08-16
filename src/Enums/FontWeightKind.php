<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** Values for ns_font_system_weight* / NSFontWeight*. */
enum FontWeightKind: int
{
    case ULTRA_LIGHT = 0;
    case THIN = 1;
    case LIGHT = 2;
    case REGULAR = 3;
    case MEDIUM = 4;
    case SEMIBOLD = 5;
    case BOLD = 6;
    case HEAVY = 7;
    case BLACK = 8;
}
