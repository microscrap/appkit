<?php

use AppKit\NS\NSGestureRecognizer\NSGestureRecognizer;

/*
| NSGestureRecognizer helpers — 1:1 over AppKit\NS\NSGestureRecognizer\NSGestureRecognizer
*/

if (! function_exists('ns_gesturerecognizer_create')) {
    function ns_gesturerecognizer_create(): int
    {
        return NSGestureRecognizer::create();
    }
}

if (! function_exists('ns_gesturerecognizer_wrap')) {
    function ns_gesturerecognizer_wrap(int $nsGestureRecognizerPtr): int
    {
        return NSGestureRecognizer::wrap($nsGestureRecognizerPtr);
    }
}

if (! function_exists('ns_gesturerecognizer_destroy')) {
    function ns_gesturerecognizer_destroy(int $recognizer): void
    {
        NSGestureRecognizer::destroy($recognizer);
    }
}

if (! function_exists('ns_gesturerecognizer_set_enabled')) {
    function ns_gesturerecognizer_set_enabled(int $recognizer, bool $enabled): void
    {
        NSGestureRecognizer::setEnabled($recognizer, $enabled);
    }
}

if (! function_exists('ns_gesturerecognizer_is_enabled')) {
    function ns_gesturerecognizer_is_enabled(int $recognizer): bool
    {
        return NSGestureRecognizer::isEnabled($recognizer);
    }
}

if (! function_exists('ns_gesturerecognizer_state')) {
    function ns_gesturerecognizer_state(int $recognizer): int
    {
        return NSGestureRecognizer::state($recognizer);
    }
}

if (! function_exists('ns_gesturerecognizer_add_to_view')) {
    function ns_gesturerecognizer_add_to_view(int $recognizer, int $view): bool
    {
        return NSGestureRecognizer::addToView($recognizer, $view);
    }
}

if (! function_exists('ns_gesturerecognizer_remove_from_view')) {
    function ns_gesturerecognizer_remove_from_view(int $recognizer, int $view): void
    {
        NSGestureRecognizer::removeFromView($recognizer, $view);
    }
}

if (! function_exists('ns_gesturerecognizer_location_in_view')) {
    function ns_gesturerecognizer_location_in_view(int $recognizer, int $view = 0): array
    {
        return NSGestureRecognizer::locationInView($recognizer, $view);
    }
}

if (! function_exists('ns_gesturerecognizer_nsgesturerecognizer')) {
    function ns_gesturerecognizer_nsgesturerecognizer(int $recognizer): int
    {
        return NSGestureRecognizer::nsGestureRecognizer($recognizer);
    }
}
