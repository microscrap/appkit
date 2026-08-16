<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSImageRepLoadStatus` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum ImageRepLoadStatus: int
{
    case UNKNOWN_TYPE = -1;
    case READING_HEADER = -2;
    case WILL_NEED_ALL_DATA = -3;
    case INVALID_DATA = -4;
    case UNEXPECTED_EOF = -5;
    case COMPLETED = -6;
}
