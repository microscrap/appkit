<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSButtonType` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum ButtonType: int
{
    case MOMENTARY_LIGHT = 0;
    case PUSH_ON_PUSH_OFF = 1;
    case TOGGLE = 2;
    case SWITCH = 3;
    case RADIO = 4;
    case MOMENTARY_CHANGE = 5;
    case ON_OFF = 6;
    case MOMENTARY_PUSH_IN = 7;
    case ACCELERATOR = 8;
    case MULTI_LEVEL_ACCELERATOR = 9;
}
