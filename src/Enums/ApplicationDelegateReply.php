<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSApplicationDelegateReply` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum ApplicationDelegateReply: int
{
    case SUCCESS = 0;
    case CANCEL = 1;
    case FAILURE = 2;
}
