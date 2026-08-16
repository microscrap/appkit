<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSColorWellStyle` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum ColorWellStyle: int
{
    case DEFAULT = 0;
    case MINIMAL = 1;
    case EXPANDED = 2;
}
