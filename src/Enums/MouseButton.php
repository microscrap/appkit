<?php

namespace Microscrap\Bindings\AppKit\Enums;

/**
 * NSEvent pressedMouseButtons bit indices for ns_event_mouse_button_down.
 */
enum MouseButton: int
{
    case LEFT = 0;
    case RIGHT = 1;
    case MIDDLE = 2;
}
