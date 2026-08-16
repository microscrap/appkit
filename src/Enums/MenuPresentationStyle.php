<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSMenuPresentationStyle` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum MenuPresentationStyle: int
{
    case REGULAR = 0;
    case PALETTE = 1;
}
