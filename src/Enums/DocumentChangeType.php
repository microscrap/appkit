<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSDocumentChangeType` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum DocumentChangeType: int
{
    case CHANGE_DONE = 0;
    case CHANGE_UNDONE = 1;
    case CHANGE_REDONE = 5;
    case CHANGE_CLEARED = 2;
    case CHANGE_READ_OTHER_CONTENTS = 3;
    case CHANGE_AUTOSAVED = 4;
    case CHANGE_DISCARDABLE = 256;
}
