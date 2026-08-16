<?php

use AppKit\NS\NSPanGestureRecognizer\NSPanGestureRecognizer;

/*
| NSPanGestureRecognizer helpers — 1:1 over AppKit\NS\NSPanGestureRecognizer\NSPanGestureRecognizer
*/

if (! function_exists('ns_pangesturerecognizer_create')) {
    function ns_pangesturerecognizer_create(): int
    {
        return NSPanGestureRecognizer::create();
    }
}

if (! function_exists('ns_pangesturerecognizer_set_button_mask')) {
    function ns_pangesturerecognizer_set_button_mask(int $recognizer, int $mask): void
    {
        NSPanGestureRecognizer::setButtonMask($recognizer, $mask);
    }
}

if (! function_exists('ns_pangesturerecognizer_button_mask')) {
    function ns_pangesturerecognizer_button_mask(int $recognizer): int
    {
        return NSPanGestureRecognizer::buttonMask($recognizer);
    }
}

if (! function_exists('ns_pangesturerecognizer_translation_in_view')) {
    function ns_pangesturerecognizer_translation_in_view(int $recognizer, int $view = 0): array
    {
        return NSPanGestureRecognizer::translationInView($recognizer, $view);
    }
}

if (! function_exists('ns_pangesturerecognizer_set_translation_in_view')) {
    function ns_pangesturerecognizer_set_translation_in_view(int $recognizer, float $x, float $y, int $view = 0): void
    {
        NSPanGestureRecognizer::setTranslationInView($recognizer, $x, $y, $view);
    }
}

if (! function_exists('ns_pangesturerecognizer_velocity_in_view')) {
    function ns_pangesturerecognizer_velocity_in_view(int $recognizer, int $view = 0): array
    {
        return NSPanGestureRecognizer::velocityInView($recognizer, $view);
    }
}

if (! function_exists('ns_pangesturerecognizer_set_number_of_touches_required')) {
    function ns_pangesturerecognizer_set_number_of_touches_required(int $recognizer, int $count): void
    {
        NSPanGestureRecognizer::setNumberOfTouchesRequired($recognizer, $count);
    }
}

if (! function_exists('ns_pangesturerecognizer_number_of_touches_required')) {
    function ns_pangesturerecognizer_number_of_touches_required(int $recognizer): int
    {
        return NSPanGestureRecognizer::numberOfTouchesRequired($recognizer);
    }
}

if (! function_exists('ns_pangesturerecognizer_nspangesturerecognizer')) {
    function ns_pangesturerecognizer_nspangesturerecognizer(int $recognizer): int
    {
        return NSPanGestureRecognizer::nsPanGestureRecognizer($recognizer);
    }
}
