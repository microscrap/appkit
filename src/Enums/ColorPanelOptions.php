<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSColorPanelOptions` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum ColorPanelOptions: int
{
    case COLOR_PANEL_GRAY_MODE_MASK = 0;
    case COLOR_PANEL_RGB_MODE_MASK = 1;
    case COLOR_PANEL_CMYK_MODE_MASK = 2;
    case COLOR_PANEL_HSB_MODE_MASK = 3;
    case COLOR_PANEL_CUSTOM_PALETTE_MODE_MASK = 4;
    case COLOR_PANEL_COLOR_LIST_MODE_MASK = 5;
    case COLOR_PANEL_WHEEL_MODE_MASK = 6;
    case COLOR_PANEL_CRAYON_MODE_MASK = 7;
    case COLOR_PANEL_ALL_MODES_MASK = 8;
}
