<?php

use AppKit\NS\NSSliderCell\NSSliderCell;

/*
| NSSliderCell helpers — 1:1 over AppKit\NS\NSSliderCell\NSSliderCell
*/

if (! function_exists('ns_slidercell_create_text')) {
    function ns_slidercell_create_text(string $value = ''): int
    {
        return NSSliderCell::createText($value);
    }
}

if (! function_exists('ns_slidercell_wrap')) {
    function ns_slidercell_wrap(int $nsSliderCellPtr): int
    {
        return NSSliderCell::wrap($nsSliderCellPtr);
    }
}

if (! function_exists('ns_slidercell_destroy')) {
    function ns_slidercell_destroy(int $cell): void
    {
        NSSliderCell::destroy($cell);
    }
}

if (! function_exists('ns_slidercell_nsslidercell')) {
    function ns_slidercell_nsslidercell(int $cell): int
    {
        return NSSliderCell::nsSliderCell($cell);
    }
}

if (! function_exists('ns_slidercell_set_title')) {
    function ns_slidercell_set_title(int $cell, string $title): void
    {
        NSSliderCell::setTitle($cell, $title);
    }
}

if (! function_exists('ns_slidercell_get_title')) {
    function ns_slidercell_get_title(int $cell): string
    {
        return NSSliderCell::getTitle($cell);
    }
}

if (! function_exists('ns_slidercell_set_state')) {
    function ns_slidercell_set_state(int $cell, int $state): void
    {
        NSSliderCell::setState($cell, $state);
    }
}

if (! function_exists('ns_slidercell_get_state')) {
    function ns_slidercell_get_state(int $cell): int
    {
        return NSSliderCell::getState($cell);
    }
}

if (! function_exists('ns_slidercell_set_enabled')) {
    function ns_slidercell_set_enabled(int $cell, bool $enabled): void
    {
        NSSliderCell::setEnabled($cell, $enabled);
    }
}

if (! function_exists('ns_slidercell_is_enabled')) {
    function ns_slidercell_is_enabled(int $cell): bool
    {
        return NSSliderCell::isEnabled($cell);
    }
}

if (! function_exists('ns_slidercell_set_tag')) {
    function ns_slidercell_set_tag(int $cell, int $tag): void
    {
        NSSliderCell::setTag($cell, $tag);
    }
}

if (! function_exists('ns_slidercell_get_tag')) {
    function ns_slidercell_get_tag(int $cell): int
    {
        return NSSliderCell::getTag($cell);
    }
}

if (! function_exists('ns_slidercell_set_min_value')) {
    function ns_slidercell_set_min_value(int $cell, float $value): void
    {
        NSSliderCell::setMinValue($cell, $value);
    }
}

if (! function_exists('ns_slidercell_get_min_value')) {
    function ns_slidercell_get_min_value(int $cell): float
    {
        return NSSliderCell::getMinValue($cell);
    }
}

if (! function_exists('ns_slidercell_set_max_value')) {
    function ns_slidercell_set_max_value(int $cell, float $value): void
    {
        NSSliderCell::setMaxValue($cell, $value);
    }
}

if (! function_exists('ns_slidercell_get_max_value')) {
    function ns_slidercell_get_max_value(int $cell): float
    {
        return NSSliderCell::getMaxValue($cell);
    }
}

if (! function_exists('ns_slidercell_set_alt_increment_value')) {
    function ns_slidercell_set_alt_increment_value(int $cell, float $value): void
    {
        NSSliderCell::setAltIncrementValue($cell, $value);
    }
}

if (! function_exists('ns_slidercell_get_alt_increment_value')) {
    function ns_slidercell_get_alt_increment_value(int $cell): float
    {
        return NSSliderCell::getAltIncrementValue($cell);
    }
}

if (! function_exists('ns_slidercell_set_slider_type')) {
    function ns_slidercell_set_slider_type(int $cell, int $type): void
    {
        NSSliderCell::setSliderType($cell, $type);
    }
}

if (! function_exists('ns_slidercell_get_slider_type')) {
    function ns_slidercell_get_slider_type(int $cell): int
    {
        return NSSliderCell::getSliderType($cell);
    }
}

if (! function_exists('ns_slidercell_set_vertical')) {
    function ns_slidercell_set_vertical(int $cell, bool $flag): void
    {
        NSSliderCell::setVertical($cell, $flag);
    }
}

if (! function_exists('ns_slidercell_is_vertical')) {
    function ns_slidercell_is_vertical(int $cell): bool
    {
        return NSSliderCell::isVertical($cell);
    }
}

if (! function_exists('ns_slidercell_set_number_of_tick_marks')) {
    function ns_slidercell_set_number_of_tick_marks(int $cell, int $count): void
    {
        NSSliderCell::setNumberOfTickMarks($cell, $count);
    }
}

if (! function_exists('ns_slidercell_get_number_of_tick_marks')) {
    function ns_slidercell_get_number_of_tick_marks(int $cell): int
    {
        return NSSliderCell::getNumberOfTickMarks($cell);
    }
}

if (! function_exists('ns_slidercell_set_tick_mark_position')) {
    function ns_slidercell_set_tick_mark_position(int $cell, int $position): void
    {
        NSSliderCell::setTickMarkPosition($cell, $position);
    }
}

if (! function_exists('ns_slidercell_get_tick_mark_position')) {
    function ns_slidercell_get_tick_mark_position(int $cell): int
    {
        return NSSliderCell::getTickMarkPosition($cell);
    }
}

if (! function_exists('ns_slidercell_set_allows_tick_mark_values_only')) {
    function ns_slidercell_set_allows_tick_mark_values_only(int $cell, bool $flag): void
    {
        NSSliderCell::setAllowsTickMarkValuesOnly($cell, $flag);
    }
}

if (! function_exists('ns_slidercell_allows_tick_mark_values_only')) {
    function ns_slidercell_allows_tick_mark_values_only(int $cell): bool
    {
        return NSSliderCell::allowsTickMarkValuesOnly($cell);
    }
}

if (! function_exists('ns_slidercell_tick_mark_value_at_index')) {
    function ns_slidercell_tick_mark_value_at_index(int $cell, int $index): float
    {
        return NSSliderCell::tickMarkValueAtIndex($cell, $index);
    }
}

if (! function_exists('ns_slidercell_closest_tick_mark_value_to_value')) {
    function ns_slidercell_closest_tick_mark_value_to_value(int $cell, float $value): float
    {
        return NSSliderCell::closestTickMarkValueToValue($cell, $value);
    }
}
