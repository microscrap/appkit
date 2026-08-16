<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSWritingToolsResultOptions` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum WritingToolsResultOptions: int
{
    case WRITING_TOOLS_RESULT_DEFAULT = 0;
    case WRITING_TOOLS_RESULT_PLAIN_TEXT = 1;
    case WRITING_TOOLS_RESULT_RICH_TEXT = 2;
    case WRITING_TOOLS_RESULT_LIST = 4;
    case WRITING_TOOLS_RESULT_TABLE = 8;
}
