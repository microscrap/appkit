<?php

use AppKit\NS\NSTextInsertionIndicator\NSTextInsertionIndicator;

/*
| NSTextInsertionIndicator helpers — 1:1 over AppKit\NS\NSTextInsertionIndicator\NSTextInsertionIndicator
*/

if (! function_exists('ns_textinsertionindicator_create')) {
    function ns_textinsertionindicator_create(int $x, int $y, int $width, int $height): int
    {
        return NSTextInsertionIndicator::create($x, $y, $width, $height);
    }
}

if (! function_exists('ns_textinsertionindicator_wrap')) {
    function ns_textinsertionindicator_wrap(int $nsTextInsertionIndicatorPtr): int
    {
        return NSTextInsertionIndicator::wrap($nsTextInsertionIndicatorPtr);
    }
}

if (! function_exists('ns_textinsertionindicator_destroy')) {
    function ns_textinsertionindicator_destroy(int $indicator): void
    {
        NSTextInsertionIndicator::destroy($indicator);
    }
}

if (! function_exists('ns_textinsertionindicator_nstextinsertionindicator')) {
    function ns_textinsertionindicator_nstextinsertionindicator(int $indicator): int
    {
        return NSTextInsertionIndicator::nsTextInsertionIndicator($indicator);
    }
}

if (! function_exists('ns_textinsertionindicator_set_display_mode')) {
    function ns_textinsertionindicator_set_display_mode(int $indicator, int $mode): void
    {
        NSTextInsertionIndicator::setDisplayMode($indicator, $mode);
    }
}

if (! function_exists('ns_textinsertionindicator_get_display_mode')) {
    function ns_textinsertionindicator_get_display_mode(int $indicator): int
    {
        return NSTextInsertionIndicator::getDisplayMode($indicator);
    }
}

if (! function_exists('ns_textinsertionindicator_set_color')) {
    function ns_textinsertionindicator_set_color(int $indicator, int $color): void
    {
        NSTextInsertionIndicator::setColor($indicator, $color);
    }
}

if (! function_exists('ns_textinsertionindicator_get_color')) {
    function ns_textinsertionindicator_get_color(int $indicator): int
    {
        return NSTextInsertionIndicator::getColor($indicator);
    }
}

if (! function_exists('ns_textinsertionindicator_set_automatic_mode_options')) {
    function ns_textinsertionindicator_set_automatic_mode_options(int $indicator, int $options): void
    {
        NSTextInsertionIndicator::setAutomaticModeOptions($indicator, $options);
    }
}

if (! function_exists('ns_textinsertionindicator_get_automatic_mode_options')) {
    function ns_textinsertionindicator_get_automatic_mode_options(int $indicator): int
    {
        return NSTextInsertionIndicator::getAutomaticModeOptions($indicator);
    }
}

if (! function_exists('ns_textinsertionindicator_set_effects_view_inserter_parent')) {
    function ns_textinsertionindicator_set_effects_view_inserter_parent(int $indicator, int $parentView): void
    {
        NSTextInsertionIndicator::setEffectsViewInserterParent($indicator, $parentView);
    }
}

if (! function_exists('ns_textinsertionindicator_clear_effects_view_inserter')) {
    function ns_textinsertionindicator_clear_effects_view_inserter(int $indicator): void
    {
        NSTextInsertionIndicator::clearEffectsViewInserter($indicator);
    }
}

if (! function_exists('ns_textinsertionindicator_has_effects_view_inserter')) {
    function ns_textinsertionindicator_has_effects_view_inserter(int $indicator): bool
    {
        return NSTextInsertionIndicator::hasEffectsViewInserter($indicator);
    }
}
