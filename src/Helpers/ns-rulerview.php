<?php

use AppKit\NS\NSRulerView\NSRulerView;

/*
| NSRulerView helpers — 1:1 over AppKit\NS\NSRulerView\NSRulerView
*/

if (! function_exists('ns_rulerview_create')) {
    function ns_rulerview_create(int $orientation = 0): int
    {
        return NSRulerView::create($orientation);
    }
}

if (! function_exists('ns_rulerview_wrap')) {
    function ns_rulerview_wrap(int $nsRulerViewPtr): int
    {
        return NSRulerView::wrap($nsRulerViewPtr);
    }
}

if (! function_exists('ns_rulerview_destroy')) {
    function ns_rulerview_destroy(int $ruler): void
    {
        NSRulerView::destroy($ruler);
    }
}

if (! function_exists('ns_rulerview_nsrulerview')) {
    function ns_rulerview_nsrulerview(int $ruler): int
    {
        return NSRulerView::nsRulerView($ruler);
    }
}

if (! function_exists('ns_rulerview_set_orientation')) {
    function ns_rulerview_set_orientation(int $ruler, int $orientation): void
    {
        NSRulerView::setOrientation($ruler, $orientation);
    }
}

if (! function_exists('ns_rulerview_get_orientation')) {
    function ns_rulerview_get_orientation(int $ruler): int
    {
        return NSRulerView::getOrientation($ruler);
    }
}

if (! function_exists('ns_rulerview_set_rule_thickness')) {
    function ns_rulerview_set_rule_thickness(int $ruler, float $thickness): void
    {
        NSRulerView::setRuleThickness($ruler, $thickness);
    }
}

if (! function_exists('ns_rulerview_get_rule_thickness')) {
    function ns_rulerview_get_rule_thickness(int $ruler): float
    {
        return NSRulerView::getRuleThickness($ruler);
    }
}

if (! function_exists('ns_rulerview_set_measurement_units')) {
    function ns_rulerview_set_measurement_units(int $ruler, string $units): void
    {
        NSRulerView::setMeasurementUnits($ruler, $units);
    }
}

if (! function_exists('ns_rulerview_get_measurement_units')) {
    function ns_rulerview_get_measurement_units(int $ruler): string
    {
        return NSRulerView::getMeasurementUnits($ruler);
    }
}

if (! function_exists('ns_rulerview_set_origin_offset')) {
    function ns_rulerview_set_origin_offset(int $ruler, float $offset): void
    {
        NSRulerView::setOriginOffset($ruler, $offset);
    }
}

if (! function_exists('ns_rulerview_get_origin_offset')) {
    function ns_rulerview_get_origin_offset(int $ruler): float
    {
        return NSRulerView::getOriginOffset($ruler);
    }
}

if (! function_exists('ns_rulerview_set_client_view')) {
    function ns_rulerview_set_client_view(int $ruler, int $view): void
    {
        NSRulerView::setClientView($ruler, $view);
    }
}

if (! function_exists('ns_rulerview_client_view')) {
    function ns_rulerview_client_view(int $ruler): int
    {
        return NSRulerView::clientView($ruler);
    }
}

if (! function_exists('ns_rulerview_set_accessory_view')) {
    function ns_rulerview_set_accessory_view(int $ruler, int $view): void
    {
        NSRulerView::setAccessoryView($ruler, $view);
    }
}

if (! function_exists('ns_rulerview_accessory_view')) {
    function ns_rulerview_accessory_view(int $ruler): int
    {
        return NSRulerView::accessoryView($ruler);
    }
}

if (! function_exists('ns_rulerview_add_marker')) {
    function ns_rulerview_add_marker(int $ruler, int $marker): void
    {
        NSRulerView::addMarker($ruler, $marker);
    }
}

if (! function_exists('ns_rulerview_remove_marker')) {
    function ns_rulerview_remove_marker(int $ruler, int $marker): void
    {
        NSRulerView::removeMarker($ruler, $marker);
    }
}

if (! function_exists('ns_rulerview_invalidate_hash_marks')) {
    function ns_rulerview_invalidate_hash_marks(int $ruler): void
    {
        NSRulerView::invalidateHashMarks($ruler);
    }
}

if (! function_exists('ns_rulerview_baseline_location')) {
    function ns_rulerview_baseline_location(int $ruler): float
    {
        return NSRulerView::baselineLocation($ruler);
    }
}

if (! function_exists('ns_rulerview_required_thickness')) {
    function ns_rulerview_required_thickness(int $ruler): float
    {
        return NSRulerView::requiredThickness($ruler);
    }
}
