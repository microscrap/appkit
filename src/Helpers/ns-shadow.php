<?php

use AppKit\NS\NSShadow\NSShadow;

/*
| NSShadow helpers — 1:1 over AppKit\NS\NSShadow\NSShadow
*/

if (! function_exists('ns_shadow_create')) {
    function ns_shadow_create(): int
    {
        return NSShadow::create();
    }
}

if (! function_exists('ns_shadow_wrap')) {
    function ns_shadow_wrap(int $nsShadowPtr): int
    {
        return NSShadow::wrap($nsShadowPtr);
    }
}

if (! function_exists('ns_shadow_destroy')) {
    function ns_shadow_destroy(int $shadow): void
    {
        NSShadow::destroy($shadow);
    }
}

if (! function_exists('ns_shadow_nsshadow')) {
    function ns_shadow_nsshadow(int $shadow): int
    {
        return NSShadow::nsShadow($shadow);
    }
}

if (! function_exists('ns_shadow_set_offset')) {
    function ns_shadow_set_offset(int $shadow, float $width, float $height): void
    {
        NSShadow::setOffset($shadow, $width, $height);
    }
}

if (! function_exists('ns_shadow_get_offset')) {
    function ns_shadow_get_offset(int $shadow): array
    {
        return NSShadow::getOffset($shadow);
    }
}

if (! function_exists('ns_shadow_set_blur_radius')) {
    function ns_shadow_set_blur_radius(int $shadow, float $radius): void
    {
        NSShadow::setBlurRadius($shadow, $radius);
    }
}

if (! function_exists('ns_shadow_get_blur_radius')) {
    function ns_shadow_get_blur_radius(int $shadow): float
    {
        return NSShadow::getBlurRadius($shadow);
    }
}

if (! function_exists('ns_shadow_set_color')) {
    function ns_shadow_set_color(int $shadow, int $color): void
    {
        NSShadow::setColor($shadow, $color);
    }
}

if (! function_exists('ns_shadow_get_color')) {
    function ns_shadow_get_color(int $shadow): int
    {
        return NSShadow::getColor($shadow);
    }
}

if (! function_exists('ns_shadow_set')) {
    function ns_shadow_set(int $shadow): void
    {
        NSShadow::set($shadow);
    }
}
