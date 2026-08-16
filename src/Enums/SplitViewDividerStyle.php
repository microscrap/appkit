<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSSplitViewDividerStyle` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum SplitViewDividerStyle: int
{
    case THICK = 1;
    case THIN = 2;
    case PANE_SPLITTER = 3;
}
