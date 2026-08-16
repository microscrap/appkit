<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSLayoutPriority` (float in AppKit; int-backed here). Pass `::CASE->value` into ns_* ints. */
enum LayoutPriority: int
{
    case REQUIRED = 1000;
    case DEFAULT_HIGH = 750;
    case DRAG_THAT_CAN_RESIZE_WINDOW = 510;
    case WINDOW_SIZE_STAY_PUT = 500;
    case DRAG_THAT_CANNOT_RESIZE_WINDOW = 490;
    case DEFAULT_LOW = 250;
    case FITTING_SIZE_COMPRESSION = 50;
}
