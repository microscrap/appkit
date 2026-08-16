<?php

use AppKit\NS\NSDatePicker\NSDatePicker;

/*
| NSDatePicker helpers — 1:1 over AppKit\NS\NSDatePicker\NSDatePicker
*/

if (! function_exists('ns_datepicker_create')) {
    function ns_datepicker_create(int $x, int $y, int $width, int $height): int
    {
        return NSDatePicker::create($x, $y, $width, $height);
    }
}

if (! function_exists('ns_datepicker_destroy')) {
    function ns_datepicker_destroy(int $picker): void
    {
        NSDatePicker::destroy($picker);
    }
}

if (! function_exists('ns_datepicker_set_timestamp')) {
    function ns_datepicker_set_timestamp(int $picker, int $timestamp): void
    {
        NSDatePicker::setTimestamp($picker, $timestamp);
    }
}

if (! function_exists('ns_datepicker_get_timestamp')) {
    function ns_datepicker_get_timestamp(int $picker): int
    {
        return NSDatePicker::getTimestamp($picker);
    }
}

if (! function_exists('ns_datepicker_poll_change')) {
    function ns_datepicker_poll_change(int $picker): bool
    {
        return NSDatePicker::pollChange($picker);
    }
}
