<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSApplicationTerminateReply` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum ApplicationTerminateReply: int
{
    case TERMINATE_CANCEL = 0;
    case TERMINATE_NOW = 1;
    case TERMINATE_LATER = 2;
}
