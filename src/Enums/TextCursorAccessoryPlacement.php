<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTextCursorAccessoryPlacement` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum TextCursorAccessoryPlacement: int
{
    case UNSPECIFIED = 0;
    case BACKWARD = 1;
    case FORWARD = 2;
    case INVISIBLE = 3;
    case CENTER = 4;
    case OFFSCREEN_LEFT = 5;
    case OFFSCREEN_TOP = 6;
    case OFFSCREEN_RIGHT = 7;
    case OFFSCREEN_BOTTOM = 8;
}
