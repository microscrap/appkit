<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSPickerTouchBarItemControlRepresentation` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum PickerTouchBarItemControlRepresentation: int
{
    case AUTOMATIC = 0;
    case EXPANDED = 1;
    case COLLAPSED = 2;
}
