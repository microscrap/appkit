<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSDragOperation` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum DragOperation: int
{
    case NONE = 0;
    case COPY = 1;
    case LINK = 2;
    case GENERIC = 4;
    case PRIVATE = 8;
    case MOVE = 16;
    case DELETE = 32;
    case EVERY = 33;
    case ALL_OBSOLETE = 15;
}
