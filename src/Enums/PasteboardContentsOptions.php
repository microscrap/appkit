<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSPasteboardContentsOptions` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum PasteboardContentsOptions: int
{
    case PASTEBOARD_CONTENTS_CURRENT_HOST_ONLY = 1;
}
