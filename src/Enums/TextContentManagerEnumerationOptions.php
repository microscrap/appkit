<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTextContentManagerEnumerationOptions` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum TextContentManagerEnumerationOptions: int
{
    case NONE = 0;
    case REVERSE = 1;
}
