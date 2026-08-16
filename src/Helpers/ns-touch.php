<?php

use AppKit\NS\NSTouch\NSTouch;

/*
| NSTouch helpers — 1:1 over AppKit\NS\NSTouch\NSTouch
*/

if (! function_exists('ns_touch_wrap')) {
    function ns_touch_wrap(int $nsTouchPtr): int
    {
        return NSTouch::wrap($nsTouchPtr);
    }
}

if (! function_exists('ns_touch_destroy')) {
    function ns_touch_destroy(int $touch): void
    {
        NSTouch::destroy($touch);
    }
}

if (! function_exists('ns_touch_phase')) {
    function ns_touch_phase(int $touch): int
    {
        return NSTouch::phase($touch);
    }
}

if (! function_exists('ns_touch_type')) {
    function ns_touch_type(int $touch): int
    {
        return NSTouch::type($touch);
    }
}

if (! function_exists('ns_touch_is_resting')) {
    function ns_touch_is_resting(int $touch): bool
    {
        return NSTouch::isResting($touch);
    }
}

if (! function_exists('ns_touch_normalized_position')) {
    function ns_touch_normalized_position(int $touch): array
    {
        return NSTouch::normalizedPosition($touch);
    }
}

if (! function_exists('ns_touch_device_size')) {
    function ns_touch_device_size(int $touch): array
    {
        return NSTouch::deviceSize($touch);
    }
}

if (! function_exists('ns_touch_location_in_view')) {
    function ns_touch_location_in_view(int $touch, int $view = 0): array
    {
        return NSTouch::locationInView($touch, $view);
    }
}

if (! function_exists('ns_touch_previous_location_in_view')) {
    function ns_touch_previous_location_in_view(int $touch, int $view = 0): array
    {
        return NSTouch::previousLocationInView($touch, $view);
    }
}

if (! function_exists('ns_touch_nstouch')) {
    function ns_touch_nstouch(int $touch): int
    {
        return NSTouch::nsTouch($touch);
    }
}
