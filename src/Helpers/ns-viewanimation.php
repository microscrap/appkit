<?php

use AppKit\NS\NSViewAnimation\NSViewAnimation;

/*
| NSViewAnimation helpers — 1:1 over AppKit\NS\NSViewAnimation\NSViewAnimation
*/

if (! function_exists('ns_viewanimation_create_fade_in')) {
    function ns_viewanimation_create_fade_in(int $targetHandle, bool $isWindow, float $duration): int
    {
        return NSViewAnimation::createFadeIn($targetHandle, $isWindow, $duration);
    }
}

if (! function_exists('ns_viewanimation_create_fade_out')) {
    function ns_viewanimation_create_fade_out(int $targetHandle, bool $isWindow, float $duration): int
    {
        return NSViewAnimation::createFadeOut($targetHandle, $isWindow, $duration);
    }
}

if (! function_exists('ns_viewanimation_create_with_frames')) {
    function ns_viewanimation_create_with_frames(int $targetHandle, bool $isWindow, float $startX, float $startY, float $startW, float $startH, float $endX, float $endY, float $endW, float $endH, float $duration): int
    {
        return NSViewAnimation::createWithFrames($targetHandle, $isWindow, $startX, $startY, $startW, $startH, $endX, $endY, $endW, $endH, $duration);
    }
}

if (! function_exists('ns_viewanimation_wrap')) {
    function ns_viewanimation_wrap(int $nsViewAnimationPtr): int
    {
        return NSViewAnimation::wrap($nsViewAnimationPtr);
    }
}

if (! function_exists('ns_viewanimation_destroy')) {
    function ns_viewanimation_destroy(int $animation): void
    {
        NSViewAnimation::destroy($animation);
    }
}

if (! function_exists('ns_viewanimation_nsviewanimation')) {
    function ns_viewanimation_nsviewanimation(int $animation): int
    {
        return NSViewAnimation::nsViewAnimation($animation);
    }
}

if (! function_exists('ns_viewanimation_start')) {
    function ns_viewanimation_start(int $animation): void
    {
        NSViewAnimation::start($animation);
    }
}

if (! function_exists('ns_viewanimation_stop')) {
    function ns_viewanimation_stop(int $animation): void
    {
        NSViewAnimation::stop($animation);
    }
}

if (! function_exists('ns_viewanimation_is_animating')) {
    function ns_viewanimation_is_animating(int $animation): bool
    {
        return NSViewAnimation::isAnimating($animation);
    }
}
