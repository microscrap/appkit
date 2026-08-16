<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSApplicationPrintReply` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum ApplicationPrintReply: int
{
    case PRINTING_CANCELLED = 0;
    case PRINTING_SUCCESS = 1;
    case PRINTING_REPLY_LATER = 2;
    case PRINTING_FAILURE = 3;
}
