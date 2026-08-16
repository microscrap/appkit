<?php

use AppKit\NS\NSScroller\NSScroller;

/*
| NSScroller helpers — 1:1 over AppKit\NS\NSScroller\NSScroller
*/

if (! function_exists('ns_scroller_create')) {
    function ns_scroller_create(int $x, int $y, int $width, int $height): int
    {
        return NSScroller::create($x, $y, $width, $height);
    }
}

if (! function_exists('ns_scroller_wrap')) {
    function ns_scroller_wrap(int $nsScrollerPtr): int
    {
        return NSScroller::wrap($nsScrollerPtr);
    }
}

if (! function_exists('ns_scroller_destroy')) {
    function ns_scroller_destroy(int $scroller): void
    {
        NSScroller::destroy($scroller);
    }
}

if (! function_exists('ns_scroller_nsscroller')) {
    function ns_scroller_nsscroller(int $scroller): int
    {
        return NSScroller::nsScroller($scroller);
    }
}

if (! function_exists('ns_scroller_set_scroller_style')) {
    function ns_scroller_set_scroller_style(int $scroller, int $style): void
    {
        NSScroller::setScrollerStyle($scroller, $style);
    }
}

if (! function_exists('ns_scroller_get_scroller_style')) {
    function ns_scroller_get_scroller_style(int $scroller): int
    {
        return NSScroller::getScrollerStyle($scroller);
    }
}

if (! function_exists('ns_scroller_set_knob_style')) {
    function ns_scroller_set_knob_style(int $scroller, int $style): void
    {
        NSScroller::setKnobStyle($scroller, $style);
    }
}

if (! function_exists('ns_scroller_get_knob_style')) {
    function ns_scroller_get_knob_style(int $scroller): int
    {
        return NSScroller::getKnobStyle($scroller);
    }
}

if (! function_exists('ns_scroller_set_control_size')) {
    function ns_scroller_set_control_size(int $scroller, int $size): void
    {
        NSScroller::setControlSize($scroller, $size);
    }
}

if (! function_exists('ns_scroller_get_control_size')) {
    function ns_scroller_get_control_size(int $scroller): int
    {
        return NSScroller::getControlSize($scroller);
    }
}

if (! function_exists('ns_scroller_set_knob_proportion')) {
    function ns_scroller_set_knob_proportion(int $scroller, float $proportion): void
    {
        NSScroller::setKnobProportion($scroller, $proportion);
    }
}

if (! function_exists('ns_scroller_get_knob_proportion')) {
    function ns_scroller_get_knob_proportion(int $scroller): float
    {
        return NSScroller::getKnobProportion($scroller);
    }
}

if (! function_exists('ns_scroller_hit_part')) {
    function ns_scroller_hit_part(int $scroller): int
    {
        return NSScroller::hitPart($scroller);
    }
}

if (! function_exists('ns_scroller_preferred_scroller_style')) {
    function ns_scroller_preferred_scroller_style(): int
    {
        return NSScroller::preferredScrollerStyle();
    }
}

if (! function_exists('ns_scroller_scroller_width')) {
    function ns_scroller_scroller_width(int $controlSize, int $scrollerStyle): float
    {
        return NSScroller::scrollerWidth($controlSize, $scrollerStyle);
    }
}
