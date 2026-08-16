<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSDatePickerMode` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum DatePickerMode: int
{
    case SINGLE = 0;
    case RANGE = 1;
}
