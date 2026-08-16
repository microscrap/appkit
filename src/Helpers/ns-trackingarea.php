<?php

use AppKit\NS\NSTrackingArea\NSTrackingArea;
use Microscrap\Bindings\AppKit\Enums\TrackingAreaOption;

/*
| NSTrackingArea helpers — 1:1 over AppKit\NS\NSTrackingArea\NSTrackingArea
*/

if (! function_exists('ns_trackingarea_create')) {
    function ns_trackingarea_create(
        int $x,
        int $y,
        int $width,
        int $height,
        TrackingAreaOption|int $options
    ): int {
        $value = $options instanceof TrackingAreaOption ? $options->value : $options;

        return NSTrackingArea::create($x, $y, $width, $height, $value);
    }
}

if (! function_exists('ns_trackingarea_destroy')) {
    function ns_trackingarea_destroy(int $area): void
    {
        NSTrackingArea::destroy($area);
    }
}

if (! function_exists('ns_trackingarea_add_to_view')) {
    function ns_trackingarea_add_to_view(int $area, int $view): bool
    {
        return NSTrackingArea::addToView($area, $view);
    }
}

if (! function_exists('ns_trackingarea_remove_from_view')) {
    function ns_trackingarea_remove_from_view(int $area, int $view): void
    {
        NSTrackingArea::removeFromView($area, $view);
    }
}

if (! function_exists('ns_trackingarea_rect')) {
    function ns_trackingarea_rect(int $area): array
    {
        return NSTrackingArea::rect($area);
    }
}

if (! function_exists('ns_trackingarea_options')) {
    function ns_trackingarea_options(int $area): int
    {
        return NSTrackingArea::options($area);
    }
}

if (! function_exists('ns_trackingarea_nstrackingarea')) {
    function ns_trackingarea_nstrackingarea(int $area): int
    {
        return NSTrackingArea::nsTrackingArea($area);
    }
}
