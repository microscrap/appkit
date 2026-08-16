<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSEventSubtype` (short). Pass `::CASE->value` into ns_* ints. */
enum EventSubtype: int
{
    case WINDOW_EXPOSED = 0;
    case APPLICATION_ACTIVATED = 1;
    case APPLICATION_DEACTIVATED = 2;
    case WINDOW_MOVED = 4;
    case SCREEN_CHANGED = 8;
    case TABLET_POINT = 3;
    case TOUCH = 5;
}
