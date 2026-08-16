<?php

namespace Microscrap\Bindings\AppKit\Enums;

/**
 * NSTouchPhase bitfield from ns_touch_phase.
 */
enum TouchPhase: int
{
    case BEGAN = 1;
    case MOVED = 2;
    case STATIONARY = 4;
    case ENDED = 8;
    case CANCELLED = 16;
    case TOUCHING = 7;
    case ANY = -1;
}
