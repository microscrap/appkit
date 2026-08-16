<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSWorkspaceAuthorizationType` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum WorkspaceAuthorizationType: int
{
    case CREATE_SYMBOLIC_LINK = 0;
    case SET_ATTRIBUTES = 1;
    case REPLACE_FILE = 2;
}
