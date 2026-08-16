<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSAutoresizingMaskOptions` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum AutoresizingMaskOptions: int
{
    case VIEW_NOT_SIZABLE = 0;
    case VIEW_MIN_X_MARGIN = 1;
    case VIEW_WIDTH_SIZABLE = 2;
    case VIEW_MAX_X_MARGIN = 4;
    case VIEW_MIN_Y_MARGIN = 8;
    case VIEW_HEIGHT_SIZABLE = 16;
    case VIEW_MAX_Y_MARGIN = 32;
}
