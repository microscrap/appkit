<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSWritingToolsCoordinatorState` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum WritingToolsCoordinatorState: int
{
    case INACTIVE = 0;
    case NONINTERACTIVE = 1;
    case INTERACTIVE_RESTING = 2;
    case INTERACTIVE_STREAMING = 3;
}
