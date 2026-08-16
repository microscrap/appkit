<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSDraggingFormation` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum DraggingFormation: int
{
    case DEFAULT = 0;
    case NONE = 1;
    case PILE = 2;
    case LIST = 3;
    case STACK = 4;
}
