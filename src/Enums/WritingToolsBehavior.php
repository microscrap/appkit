<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSWritingToolsBehavior` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum WritingToolsBehavior: int
{
    case NONE = -1;
    case DEFAULT = 0;
    case COMPLETE = 1;
    case LIMITED = 2;
}
