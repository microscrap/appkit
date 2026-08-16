<?php

use AppKit\NS\NSRotationGestureRecognizer\NSRotationGestureRecognizer;

/*
| NSRotationGestureRecognizer helpers — 1:1 over AppKit\NS\NSRotationGestureRecognizer\NSRotationGestureRecognizer
*/

if (! function_exists('ns_rotationgesturerecognizer_create')) {
    function ns_rotationgesturerecognizer_create(): int
    {
        return NSRotationGestureRecognizer::create();
    }
}

if (! function_exists('ns_rotationgesturerecognizer_rotation')) {
    function ns_rotationgesturerecognizer_rotation(int $recognizer): float
    {
        return NSRotationGestureRecognizer::rotation($recognizer);
    }
}

if (! function_exists('ns_rotationgesturerecognizer_rotation_in_degrees')) {
    function ns_rotationgesturerecognizer_rotation_in_degrees(int $recognizer): float
    {
        return NSRotationGestureRecognizer::rotationInDegrees($recognizer);
    }
}

if (! function_exists('ns_rotationgesturerecognizer_set_rotation')) {
    function ns_rotationgesturerecognizer_set_rotation(int $recognizer, float $radians): void
    {
        NSRotationGestureRecognizer::setRotation($recognizer, $radians);
    }
}

if (! function_exists('ns_rotationgesturerecognizer_nsrotationgesturerecognizer')) {
    function ns_rotationgesturerecognizer_nsrotationgesturerecognizer(int $recognizer): int
    {
        return NSRotationGestureRecognizer::nsRotationGestureRecognizer($recognizer);
    }
}
