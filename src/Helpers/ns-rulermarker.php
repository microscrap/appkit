<?php

use AppKit\NS\NSRulerMarker\NSRulerMarker;

/*
| NSRulerMarker helpers — 1:1 over AppKit\NS\NSRulerMarker\NSRulerMarker
*/

if (! function_exists('ns_rulermarker_create')) {
    function ns_rulermarker_create(int $ruler, float $location): int
    {
        return NSRulerMarker::create($ruler, $location);
    }
}

if (! function_exists('ns_rulermarker_wrap')) {
    function ns_rulermarker_wrap(int $nsRulerMarkerPtr): int
    {
        return NSRulerMarker::wrap($nsRulerMarkerPtr);
    }
}

if (! function_exists('ns_rulermarker_destroy')) {
    function ns_rulermarker_destroy(int $marker): void
    {
        NSRulerMarker::destroy($marker);
    }
}

if (! function_exists('ns_rulermarker_nsrulermarker')) {
    function ns_rulermarker_nsrulermarker(int $marker): int
    {
        return NSRulerMarker::nsRulerMarker($marker);
    }
}

if (! function_exists('ns_rulermarker_set_location')) {
    function ns_rulermarker_set_location(int $marker, float $location): void
    {
        NSRulerMarker::setLocation($marker, $location);
    }
}

if (! function_exists('ns_rulermarker_get_location')) {
    function ns_rulermarker_get_location(int $marker): float
    {
        return NSRulerMarker::getLocation($marker);
    }
}

if (! function_exists('ns_rulermarker_set_movable')) {
    function ns_rulermarker_set_movable(int $marker, bool $flag): void
    {
        NSRulerMarker::setMovable($marker, $flag);
    }
}

if (! function_exists('ns_rulermarker_is_movable')) {
    function ns_rulermarker_is_movable(int $marker): bool
    {
        return NSRulerMarker::isMovable($marker);
    }
}

if (! function_exists('ns_rulermarker_set_removable')) {
    function ns_rulermarker_set_removable(int $marker, bool $flag): void
    {
        NSRulerMarker::setRemovable($marker, $flag);
    }
}

if (! function_exists('ns_rulermarker_is_removable')) {
    function ns_rulermarker_is_removable(int $marker): bool
    {
        return NSRulerMarker::isRemovable($marker);
    }
}

if (! function_exists('ns_rulermarker_thickness_required')) {
    function ns_rulermarker_thickness_required(int $marker): float
    {
        return NSRulerMarker::thicknessRequired($marker);
    }
}

if (! function_exists('ns_rulermarker_is_dragging')) {
    function ns_rulermarker_is_dragging(int $marker): bool
    {
        return NSRulerMarker::isDragging($marker);
    }
}
