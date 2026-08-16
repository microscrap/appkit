<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSScrollElasticity` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum ScrollElasticity: int
{
    case AUTOMATIC = 0;
    case NONE = 1;
    case ALLOWED = 2;
}
