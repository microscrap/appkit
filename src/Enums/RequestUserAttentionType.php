<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSRequestUserAttentionType` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum RequestUserAttentionType: int
{
    case CRITICAL_REQUEST = 0;
    case INFORMATIONAL_REQUEST = 10;
}
