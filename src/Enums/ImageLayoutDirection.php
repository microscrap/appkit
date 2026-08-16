<?php

namespace Microscrap\Bindings\AppKit\Enums;

/**
 * NSImageLayoutDirection — pass the int value to ns_imagerep_set_layout_direction.
 */
enum ImageLayoutDirection: int
{
    case UNSPECIFIED = -1;
    case LEFT_TO_RIGHT = 2;
    case RIGHT_TO_LEFT = 3;
}
