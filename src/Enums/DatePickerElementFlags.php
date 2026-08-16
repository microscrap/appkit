<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSDatePickerElementFlags` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum DatePickerElementFlags: int
{
    case DATE_PICKER_ELEMENT_FLAG_HOUR_MINUTE = 0;
    case DATE_PICKER_ELEMENT_FLAG_HOUR_MINUTE_SECOND = 1;
    case DATE_PICKER_ELEMENT_FLAG_TIME_ZONE = 2;
    case DATE_PICKER_ELEMENT_FLAG_YEAR_MONTH = 3;
    case DATE_PICKER_ELEMENT_FLAG_YEAR_MONTH_DAY = 4;
    case DATE_PICKER_ELEMENT_FLAG_ERA = 5;
}
