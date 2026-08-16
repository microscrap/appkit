<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSViewLayerContentsPlacement` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum ViewLayerContentsPlacement: int
{
    case SCALE_AXES_INDEPENDENTLY = 0;
    case SCALE_PROPORTIONALLY_TO_FIT = 1;
    case SCALE_PROPORTIONALLY_TO_FILL = 2;
    case CENTER = 3;
    case TOP = 4;
    case TOP_RIGHT = 5;
    case RIGHT = 6;
    case BOTTOM_RIGHT = 7;
    case BOTTOM = 8;
    case BOTTOM_LEFT = 9;
    case LEFT = 10;
    case TOP_LEFT = 11;
}
