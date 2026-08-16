<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTitlebarSeparatorStyle` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum TitlebarSeparatorStyle: int
{
    case AUTOMATIC = 0;
    case NONE = 1;
    case LINE = 2;
    case SHADOW = 3;
}
