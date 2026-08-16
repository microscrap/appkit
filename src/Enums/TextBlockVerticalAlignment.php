<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** NSTextBlockVerticalAlignment — pass to ns_texttable_set_vertical_alignment. */
enum TextBlockVerticalAlignment: int
{
    case TOP = 0;
    case MIDDLE = 1;
    case BOTTOM = 2;
    case BASELINE = 3;
}
