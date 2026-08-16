<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** NSColorPanelMode — pass to ns_colorpanel_set_mode / set_picker_mode. */
enum ColorPanelMode: int
{
    case NONE = -1;
    case GRAY = 0;
    case RGB = 1;
    case CMYK = 2;
    case HSB = 3;
    case CUSTOM_PALETTE = 4;
    case COLOR_LIST = 5;
    case WHEEL = 6;
    case CRAYON = 7;
}
