<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSMatrixMode` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum MatrixMode: int
{
    case RADIO_MODE_MATRIX = 0;
    case HIGHLIGHT_MODE_MATRIX = 1;
    case LIST_MODE_MATRIX = 2;
    case TRACK_MODE_MATRIX = 3;
}
