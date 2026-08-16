<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSCorrectionResponse` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum CorrectionResponse: int
{
    case NONE = 0;
    case ACCEPTED = 1;
    case REJECTED = 2;
    case IGNORED = 3;
    case EDITED = 4;
    case REVERTED = 5;
}
