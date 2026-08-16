<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSSharingCollaborationMode` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum SharingCollaborationMode: int
{
    case SEND_COPY = 0;
    case COLLABORATE = 1;
}
