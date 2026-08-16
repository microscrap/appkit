<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSPasteboardReadingOptions` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum PasteboardReadingOptions: int
{
    case PASTEBOARD_READING_AS_DATA = 0;
    case PASTEBOARD_READING_AS_STRING = 1;
    case PASTEBOARD_READING_AS_PROPERTY_LIST = 2;
    case PASTEBOARD_READING_AS_KEYED_ARCHIVE = 4;
}
