<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTextLayoutFragmentEnumerationOptions` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum TextLayoutFragmentEnumerationOptions: int
{
    case NONE = 0;
    case REVERSE = 1;
    case ESTIMATES_SIZE = 2;
    case ENSURES_LAYOUT = 3;
    case ENSURES_EXTRA_LINE_FRAGMENT = 4;
}
