<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSWritingToolsCoordinatorTextReplacementReason` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum WritingToolsCoordinatorTextReplacementReason: int
{
    case INTERACTIVE = 0;
    case NONINTERACTIVE = 1;
}
