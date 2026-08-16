<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSFontPanelModeMask` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum FontPanelModeMask: int
{
    case FACE = 1;
    case SIZE = 2;
    case COLLECTION = 4;
    case UNDERLINE_EFFECT = 256;
    case STRIKETHROUGH_EFFECT = 512;
    case TEXT_COLOR_EFFECT = 1024;
    case DOCUMENT_COLOR_EFFECT = 2048;
    case SHADOW_EFFECT = 4096;
    case ALL_EFFECTS = 8;
    case FONT_PANEL_MODES_MASK_STANDARD_MODES = 9;
    case FONT_PANEL_MODES_MASK_ALL_MODES = 10;
}
