<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSCorrectionIndicatorType` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum CorrectionIndicatorType: int
{
    case DEFAULT = 0;
    case REVERSION = 1;
    case GUESSES = 2;
}
