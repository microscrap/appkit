<?php

use AppKit\NS\NSAnimation\NSAnimation;

/*
| NSAnimation helpers — 1:1 over AppKit\NS\NSAnimation\NSAnimation
*/

if (! function_exists('ns_animation_create')) {
    function ns_animation_create(float $duration, int $curve = 0): int
    {
        return NSAnimation::create($duration, $curve);
    }
}

if (! function_exists('ns_animation_wrap')) {
    function ns_animation_wrap(int $nsAnimationPtr): int
    {
        return NSAnimation::wrap($nsAnimationPtr);
    }
}

if (! function_exists('ns_animation_destroy')) {
    function ns_animation_destroy(int $animation): void
    {
        NSAnimation::destroy($animation);
    }
}

if (! function_exists('ns_animation_nsanimation')) {
    function ns_animation_nsanimation(int $animation): int
    {
        return NSAnimation::nsAnimation($animation);
    }
}

if (! function_exists('ns_animation_start')) {
    function ns_animation_start(int $animation): void
    {
        NSAnimation::start($animation);
    }
}

if (! function_exists('ns_animation_stop')) {
    function ns_animation_stop(int $animation): void
    {
        NSAnimation::stop($animation);
    }
}

if (! function_exists('ns_animation_is_animating')) {
    function ns_animation_is_animating(int $animation): bool
    {
        return NSAnimation::isAnimating($animation);
    }
}

if (! function_exists('ns_animation_set_current_progress')) {
    function ns_animation_set_current_progress(int $animation, float $progress): void
    {
        NSAnimation::setCurrentProgress($animation, $progress);
    }
}

if (! function_exists('ns_animation_get_current_progress')) {
    function ns_animation_get_current_progress(int $animation): float
    {
        return NSAnimation::getCurrentProgress($animation);
    }
}

if (! function_exists('ns_animation_set_duration')) {
    function ns_animation_set_duration(int $animation, float $duration): void
    {
        NSAnimation::setDuration($animation, $duration);
    }
}

if (! function_exists('ns_animation_get_duration')) {
    function ns_animation_get_duration(int $animation): float
    {
        return NSAnimation::getDuration($animation);
    }
}

if (! function_exists('ns_animation_set_blocking_mode')) {
    function ns_animation_set_blocking_mode(int $animation, int $mode): void
    {
        NSAnimation::setBlockingMode($animation, $mode);
    }
}

if (! function_exists('ns_animation_get_blocking_mode')) {
    function ns_animation_get_blocking_mode(int $animation): int
    {
        return NSAnimation::getBlockingMode($animation);
    }
}

if (! function_exists('ns_animation_set_frame_rate')) {
    function ns_animation_set_frame_rate(int $animation, float $frameRate): void
    {
        NSAnimation::setFrameRate($animation, $frameRate);
    }
}

if (! function_exists('ns_animation_get_frame_rate')) {
    function ns_animation_get_frame_rate(int $animation): float
    {
        return NSAnimation::getFrameRate($animation);
    }
}

if (! function_exists('ns_animation_set_curve')) {
    function ns_animation_set_curve(int $animation, int $curve): void
    {
        NSAnimation::setCurve($animation, $curve);
    }
}

if (! function_exists('ns_animation_get_curve')) {
    function ns_animation_get_curve(int $animation): int
    {
        return NSAnimation::getCurve($animation);
    }
}

if (! function_exists('ns_animation_get_current_value')) {
    function ns_animation_get_current_value(int $animation): float
    {
        return NSAnimation::getCurrentValue($animation);
    }
}

if (! function_exists('ns_animation_add_progress_mark')) {
    function ns_animation_add_progress_mark(int $animation, float $mark): void
    {
        NSAnimation::addProgressMark($animation, $mark);
    }
}

if (! function_exists('ns_animation_remove_progress_mark')) {
    function ns_animation_remove_progress_mark(int $animation, float $mark): void
    {
        NSAnimation::removeProgressMark($animation, $mark);
    }
}
