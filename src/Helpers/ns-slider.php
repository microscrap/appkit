<?php

use AppKit\NS\NSSlider\NSSlider;

/*
| NSSlider helpers — 1:1 over AppKit\NS\NSSlider\NSSlider
*/

if (! function_exists('ns_slider_create')) {
    function ns_slider_create(int $x, int $y, int $width, int $height, float $min = 0.0, float $max = 100.0): int
    {
        return NSSlider::create($x, $y, $width, $height, $min, $max);
    }
}

if (! function_exists('ns_slider_destroy')) {
    function ns_slider_destroy(int $slider): void
    {
        NSSlider::destroy($slider);
    }
}

if (! function_exists('ns_slider_set_value')) {
    function ns_slider_set_value(int $slider, float $value): void
    {
        NSSlider::setValue($slider, $value);
    }
}

if (! function_exists('ns_slider_get_value')) {
    function ns_slider_get_value(int $slider): float
    {
        return NSSlider::getValue($slider);
    }
}

if (! function_exists('ns_slider_poll_change')) {
    function ns_slider_poll_change(int $slider): bool
    {
        return NSSlider::pollChange($slider);
    }
}
