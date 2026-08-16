<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSSaveOperationType` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum SaveOperationType: int
{
    case SAVE_OPERATION = 0;
    case SAVE_AS_OPERATION = 1;
    case SAVE_TO_OPERATION = 2;
    case AUTOSAVE_IN_PLACE_OPERATION = 4;
    case AUTOSAVE_ELSEWHERE_OPERATION = 3;
    case AUTOSAVE_AS_OPERATION = 5;
}
