<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSWritingToolsCoordinatorContextScope` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum WritingToolsCoordinatorContextScope: int
{
    case USER_SELECTION = 0;
    case FULL_DOCUMENT = 1;
    case VISIBLE_AREA = 2;
}
