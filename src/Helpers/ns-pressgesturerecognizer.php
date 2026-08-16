<?php

use AppKit\NS\NSPressGestureRecognizer\NSPressGestureRecognizer;

/*
| NSPressGestureRecognizer helpers — 1:1 over AppKit\NS\NSPressGestureRecognizer\NSPressGestureRecognizer
*/

if (! function_exists('ns_pressgesturerecognizer_create')) {
    function ns_pressgesturerecognizer_create(): int
    {
        return NSPressGestureRecognizer::create();
    }
}

if (! function_exists('ns_pressgesturerecognizer_set_button_mask')) {
    function ns_pressgesturerecognizer_set_button_mask(int $recognizer, int $mask): void
    {
        NSPressGestureRecognizer::setButtonMask($recognizer, $mask);
    }
}

if (! function_exists('ns_pressgesturerecognizer_button_mask')) {
    function ns_pressgesturerecognizer_button_mask(int $recognizer): int
    {
        return NSPressGestureRecognizer::buttonMask($recognizer);
    }
}

if (! function_exists('ns_pressgesturerecognizer_set_minimum_press_duration')) {
    function ns_pressgesturerecognizer_set_minimum_press_duration(int $recognizer, float $seconds): void
    {
        NSPressGestureRecognizer::setMinimumPressDuration($recognizer, $seconds);
    }
}

if (! function_exists('ns_pressgesturerecognizer_minimum_press_duration')) {
    function ns_pressgesturerecognizer_minimum_press_duration(int $recognizer): float
    {
        return NSPressGestureRecognizer::minimumPressDuration($recognizer);
    }
}

if (! function_exists('ns_pressgesturerecognizer_set_allowable_movement')) {
    function ns_pressgesturerecognizer_set_allowable_movement(int $recognizer, float $points): void
    {
        NSPressGestureRecognizer::setAllowableMovement($recognizer, $points);
    }
}

if (! function_exists('ns_pressgesturerecognizer_allowable_movement')) {
    function ns_pressgesturerecognizer_allowable_movement(int $recognizer): float
    {
        return NSPressGestureRecognizer::allowableMovement($recognizer);
    }
}

if (! function_exists('ns_pressgesturerecognizer_set_number_of_touches_required')) {
    function ns_pressgesturerecognizer_set_number_of_touches_required(int $recognizer, int $count): void
    {
        NSPressGestureRecognizer::setNumberOfTouchesRequired($recognizer, $count);
    }
}

if (! function_exists('ns_pressgesturerecognizer_number_of_touches_required')) {
    function ns_pressgesturerecognizer_number_of_touches_required(int $recognizer): int
    {
        return NSPressGestureRecognizer::numberOfTouchesRequired($recognizer);
    }
}

if (! function_exists('ns_pressgesturerecognizer_nspressgesturerecognizer')) {
    function ns_pressgesturerecognizer_nspressgesturerecognizer(int $recognizer): int
    {
        return NSPressGestureRecognizer::nsPressGestureRecognizer($recognizer);
    }
}
