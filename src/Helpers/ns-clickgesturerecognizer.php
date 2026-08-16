<?php

use AppKit\NS\NSClickGestureRecognizer\NSClickGestureRecognizer;

/*
| NSClickGestureRecognizer helpers — 1:1 over AppKit\NS\NSClickGestureRecognizer\NSClickGestureRecognizer
*/

if (! function_exists('ns_clickgesturerecognizer_create')) {
    function ns_clickgesturerecognizer_create(): int
    {
        return NSClickGestureRecognizer::create();
    }
}

if (! function_exists('ns_clickgesturerecognizer_set_button_mask')) {
    function ns_clickgesturerecognizer_set_button_mask(int $recognizer, int $mask): void
    {
        NSClickGestureRecognizer::setButtonMask($recognizer, $mask);
    }
}

if (! function_exists('ns_clickgesturerecognizer_button_mask')) {
    function ns_clickgesturerecognizer_button_mask(int $recognizer): int
    {
        return NSClickGestureRecognizer::buttonMask($recognizer);
    }
}

if (! function_exists('ns_clickgesturerecognizer_set_number_of_clicks_required')) {
    function ns_clickgesturerecognizer_set_number_of_clicks_required(int $recognizer, int $count): void
    {
        NSClickGestureRecognizer::setNumberOfClicksRequired($recognizer, $count);
    }
}

if (! function_exists('ns_clickgesturerecognizer_number_of_clicks_required')) {
    function ns_clickgesturerecognizer_number_of_clicks_required(int $recognizer): int
    {
        return NSClickGestureRecognizer::numberOfClicksRequired($recognizer);
    }
}

if (! function_exists('ns_clickgesturerecognizer_set_number_of_touches_required')) {
    function ns_clickgesturerecognizer_set_number_of_touches_required(int $recognizer, int $count): void
    {
        NSClickGestureRecognizer::setNumberOfTouchesRequired($recognizer, $count);
    }
}

if (! function_exists('ns_clickgesturerecognizer_number_of_touches_required')) {
    function ns_clickgesturerecognizer_number_of_touches_required(int $recognizer): int
    {
        return NSClickGestureRecognizer::numberOfTouchesRequired($recognizer);
    }
}

if (! function_exists('ns_clickgesturerecognizer_nsclickgesturerecognizer')) {
    function ns_clickgesturerecognizer_nsclickgesturerecognizer(int $recognizer): int
    {
        return NSClickGestureRecognizer::nsClickGestureRecognizer($recognizer);
    }
}
