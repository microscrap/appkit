<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSPaperOrientation` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum PaperOrientation: int
{
    case PORTRAIT = 0;
    case LANDSCAPE = 1;
}
