<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSWindowNumberListOptions` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum WindowNumberListOptions: int
{
    case WINDOW_NUMBER_LIST_ALL_APPLICATIONS = 1;
    case WINDOW_NUMBER_LIST_ALL_SPACES = 16;
}
