<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSWritingToolsCoordinatorTextUpdateReason` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum WritingToolsCoordinatorTextUpdateReason: int
{
    case TYPING = 0;
    case UNDO_REDO = 1;
}
