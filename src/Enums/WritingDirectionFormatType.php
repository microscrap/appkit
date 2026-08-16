<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSWritingDirectionFormatType` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum WritingDirectionFormatType: int
{
    case WRITING_DIRECTION_EMBEDDING = 0;
    case WRITING_DIRECTION_OVERRIDE = 1;
}
