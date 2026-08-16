<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSWritingToolsCoordinatorTextAnimation` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum WritingToolsCoordinatorTextAnimation: int
{
    case ANTICIPATE = 0;
    case REMOVE = 1;
    case INSERT = 2;
    case ANTICIPATE_INACTIVE = 8;
    case TRANSLATE = 9;
}
