<?php

namespace Microscrap\Bindings\AppKit\Enums;

/**
 * NSGestureRecognizerState values returned by ns_gesturerecognizer_state.
 */
enum GestureRecognizerState: int
{
    case POSSIBLE = 0;
    case BEGAN = 1;
    case CHANGED = 2;
    case ENDED = 3;
    case CANCELLED = 4;
    case FAILED = 5;
}
