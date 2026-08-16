<?php

use AppKit\NS\NSVisualEffectView\NSVisualEffectView;

/*
| NSVisualEffectView helpers — 1:1 over AppKit\NS\NSVisualEffectView\NSVisualEffectView
*/

if (! function_exists('ns_visualeffectview_create')) {
    function ns_visualeffectview_create(int $x, int $y, int $width, int $height): int
    {
        return NSVisualEffectView::create($x, $y, $width, $height);
    }
}

if (! function_exists('ns_visualeffectview_wrap')) {
    function ns_visualeffectview_wrap(int $nsVisualEffectViewPtr): int
    {
        return NSVisualEffectView::wrap($nsVisualEffectViewPtr);
    }
}

if (! function_exists('ns_visualeffectview_destroy')) {
    function ns_visualeffectview_destroy(int $view): void
    {
        NSVisualEffectView::destroy($view);
    }
}

if (! function_exists('ns_visualeffectview_nsvisualeffectview')) {
    function ns_visualeffectview_nsvisualeffectview(int $view): int
    {
        return NSVisualEffectView::nsVisualEffectView($view);
    }
}

if (! function_exists('ns_visualeffectview_set_material')) {
    function ns_visualeffectview_set_material(int $view, int $material): void
    {
        NSVisualEffectView::setMaterial($view, $material);
    }
}

if (! function_exists('ns_visualeffectview_get_material')) {
    function ns_visualeffectview_get_material(int $view): int
    {
        return NSVisualEffectView::getMaterial($view);
    }
}

if (! function_exists('ns_visualeffectview_set_blending_mode')) {
    function ns_visualeffectview_set_blending_mode(int $view, int $mode): void
    {
        NSVisualEffectView::setBlendingMode($view, $mode);
    }
}

if (! function_exists('ns_visualeffectview_get_blending_mode')) {
    function ns_visualeffectview_get_blending_mode(int $view): int
    {
        return NSVisualEffectView::getBlendingMode($view);
    }
}

if (! function_exists('ns_visualeffectview_set_state')) {
    function ns_visualeffectview_set_state(int $view, int $state): void
    {
        NSVisualEffectView::setState($view, $state);
    }
}

if (! function_exists('ns_visualeffectview_get_state')) {
    function ns_visualeffectview_get_state(int $view): int
    {
        return NSVisualEffectView::getState($view);
    }
}

if (! function_exists('ns_visualeffectview_set_emphasized')) {
    function ns_visualeffectview_set_emphasized(int $view, bool $flag): void
    {
        NSVisualEffectView::setEmphasized($view, $flag);
    }
}

if (! function_exists('ns_visualeffectview_is_emphasized')) {
    function ns_visualeffectview_is_emphasized(int $view): bool
    {
        return NSVisualEffectView::isEmphasized($view);
    }
}

if (! function_exists('ns_visualeffectview_interior_background_style')) {
    function ns_visualeffectview_interior_background_style(int $view): int
    {
        return NSVisualEffectView::interiorBackgroundStyle($view);
    }
}
