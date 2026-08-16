<?php

namespace Microscrap\Bindings\AppKit\Enums;

/**
 * ext-appkit `statusItemWithKind` kind (not Apple's NSVariableStatusItemLength).
 * VARIABLE = 0, SQUARE = 1.
 */
enum StatusItemLengthKind: int
{
    case VARIABLE = 0;
    case SQUARE = 1;
}
