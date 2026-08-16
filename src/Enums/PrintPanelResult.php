<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSPrintPanelResult` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum PrintPanelResult: int
{
    case CANCELLED = 0;
    case PRINTED = 1;
}
