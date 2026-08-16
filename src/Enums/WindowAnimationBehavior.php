<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSWindowAnimationBehavior` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum WindowAnimationBehavior: int
{
    case DEFAULT = 0;
    case NONE = 2;
    case DOCUMENT_WINDOW = 3;
    case UTILITY_WINDOW = 4;
    case ALERT_PANEL = 5;
}
