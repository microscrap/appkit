<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSImageLoadStatus` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum ImageLoadStatus: int
{
    case COMPLETED = 0;
    case CANCELLED = 1;
    case INVALID_DATA = 2;
    case UNEXPECTED_EOF = 3;
    case READ_ERROR = 4;
}
