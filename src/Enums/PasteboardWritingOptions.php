<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSPasteboardWritingOptions` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum PasteboardWritingOptions: int
{
    case PASTEBOARD_WRITING_PROMISED = 512;
}
