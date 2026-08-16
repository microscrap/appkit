<?php

use AppKit\NS\NSMagnificationGestureRecognizer\NSMagnificationGestureRecognizer;

/*
| NSMagnificationGestureRecognizer helpers — 1:1 over AppKit\NS\NSMagnificationGestureRecognizer\NSMagnificationGestureRecognizer
*/

if (! function_exists('ns_magnificationgesturerecognizer_create')) {
    function ns_magnificationgesturerecognizer_create(): int
    {
        return NSMagnificationGestureRecognizer::create();
    }
}

if (! function_exists('ns_gesturerecognizer_destroy')) {
    function ns_gesturerecognizer_destroy(int $recognizer): void
    {
        NSMagnificationGestureRecognizer::destroy($recognizer);
    }
}

if (! function_exists('ns_gesturerecognizer_set_enabled')) {
    function ns_gesturerecognizer_set_enabled(int $recognizer, bool $enabled): void
    {
        NSMagnificationGestureRecognizer::setEnabled($recognizer, $enabled);
    }
}

if (! function_exists('ns_gesturerecognizer_is_enabled')) {
    function ns_gesturerecognizer_is_enabled(int $recognizer): bool
    {
        return NSMagnificationGestureRecognizer::isEnabled($recognizer);
    }
}

if (! function_exists('ns_gesturerecognizer_state')) {
    function ns_gesturerecognizer_state(int $recognizer): int
    {
        return NSMagnificationGestureRecognizer::state($recognizer);
    }
}

if (! function_exists('ns_gesturerecognizer_add_to_view')) {
    function ns_gesturerecognizer_add_to_view(int $recognizer, int $view): bool
    {
        return NSMagnificationGestureRecognizer::addToView($recognizer, $view);
    }
}

if (! function_exists('ns_gesturerecognizer_remove_from_view')) {
    function ns_gesturerecognizer_remove_from_view(int $recognizer, int $view): void
    {
        NSMagnificationGestureRecognizer::removeFromView($recognizer, $view);
    }
}

if (! function_exists('ns_gesturerecognizer_location_in_view')) {
    function ns_gesturerecognizer_location_in_view(int $recognizer, int $view = 0): array
    {
        return NSMagnificationGestureRecognizer::locationInView($recognizer, $view);
    }
}

if (! function_exists('ns_magnificationgesturerecognizer_magnification')) {
    function ns_magnificationgesturerecognizer_magnification(int $recognizer): float
    {
        return NSMagnificationGestureRecognizer::magnification($recognizer);
    }
}

if (! function_exists('ns_magnificationgesturerecognizer_set_magnification')) {
    function ns_magnificationgesturerecognizer_set_magnification(int $recognizer, float $value): void
    {
        NSMagnificationGestureRecognizer::setMagnification($recognizer, $value);
    }
}

if (! function_exists('ns_gesturerecognizer_nsgesturerecognizer')) {
    function ns_gesturerecognizer_nsgesturerecognizer(int $recognizer): int
    {
        return NSMagnificationGestureRecognizer::nsMagnificationGestureRecognizer($recognizer);
    }
}
