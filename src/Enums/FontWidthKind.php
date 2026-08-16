<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** Values for ns_font_system_weight_width / NSFontWidth*. */
enum FontWidthKind: int
{
    case COMPRESSED = 0;
    case CONDENSED = 1;
    case STANDARD = 2;
    case EXPANDED = 3;
}
