<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSDatePickerStyle` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum DatePickerStyle: int
{
    case TEXT_FIELD_AND_STEPPER = 0;
    case CLOCK_AND_CALENDAR = 1;
    case TEXT_FIELD = 2;
}
