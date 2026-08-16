<?php

use AppKit\NS\NSLevelIndicator\NSLevelIndicator;
use Microscrap\Bindings\AppKit\Enums\LevelIndicatorPlaceholderVisibility;
use Microscrap\Bindings\AppKit\Enums\LevelIndicatorStyle;

/*
| NSLevelIndicator helpers — 1:1 over AppKit\NS\NSLevelIndicator\NSLevelIndicator
*/

if (! function_exists('ns_levelindicator_create')) {
    function ns_levelindicator_create(int $x, int $y, int $width, int $height): int
    {
        return NSLevelIndicator::create($x, $y, $width, $height);
    }
}

if (! function_exists('ns_levelindicator_destroy')) {
    function ns_levelindicator_destroy(int $indicator): void
    {
        NSLevelIndicator::destroy($indicator);
    }
}

if (! function_exists('ns_levelindicator_set_level_indicator_style')) {
    function ns_levelindicator_set_level_indicator_style(int $indicator, LevelIndicatorStyle|int $style): void
    {
        NSLevelIndicator::setLevelIndicatorStyle(
            $indicator,
            $style instanceof LevelIndicatorStyle ? $style->value : $style
        );
    }
}

if (! function_exists('ns_levelindicator_get_level_indicator_style')) {
    function ns_levelindicator_get_level_indicator_style(int $indicator): int
    {
        return NSLevelIndicator::getLevelIndicatorStyle($indicator);
    }
}

if (! function_exists('ns_levelindicator_set_editable')) {
    function ns_levelindicator_set_editable(int $indicator, bool $flag): void
    {
        NSLevelIndicator::setEditable($indicator, $flag);
    }
}

if (! function_exists('ns_levelindicator_is_editable')) {
    function ns_levelindicator_is_editable(int $indicator): bool
    {
        return NSLevelIndicator::isEditable($indicator);
    }
}

if (! function_exists('ns_levelindicator_set_min_value')) {
    function ns_levelindicator_set_min_value(int $indicator, float $value): void
    {
        NSLevelIndicator::setMinValue($indicator, $value);
    }
}

if (! function_exists('ns_levelindicator_get_min_value')) {
    function ns_levelindicator_get_min_value(int $indicator): float
    {
        return NSLevelIndicator::getMinValue($indicator);
    }
}

if (! function_exists('ns_levelindicator_set_max_value')) {
    function ns_levelindicator_set_max_value(int $indicator, float $value): void
    {
        NSLevelIndicator::setMaxValue($indicator, $value);
    }
}

if (! function_exists('ns_levelindicator_get_max_value')) {
    function ns_levelindicator_get_max_value(int $indicator): float
    {
        return NSLevelIndicator::getMaxValue($indicator);
    }
}

if (! function_exists('ns_levelindicator_set_warning_value')) {
    function ns_levelindicator_set_warning_value(int $indicator, float $value): void
    {
        NSLevelIndicator::setWarningValue($indicator, $value);
    }
}

if (! function_exists('ns_levelindicator_get_warning_value')) {
    function ns_levelindicator_get_warning_value(int $indicator): float
    {
        return NSLevelIndicator::getWarningValue($indicator);
    }
}

if (! function_exists('ns_levelindicator_set_critical_value')) {
    function ns_levelindicator_set_critical_value(int $indicator, float $value): void
    {
        NSLevelIndicator::setCriticalValue($indicator, $value);
    }
}

if (! function_exists('ns_levelindicator_get_critical_value')) {
    function ns_levelindicator_get_critical_value(int $indicator): float
    {
        return NSLevelIndicator::getCriticalValue($indicator);
    }
}

if (! function_exists('ns_levelindicator_set_double_value')) {
    function ns_levelindicator_set_double_value(int $indicator, float $value): void
    {
        NSLevelIndicator::setDoubleValue($indicator, $value);
    }
}

if (! function_exists('ns_levelindicator_get_double_value')) {
    function ns_levelindicator_get_double_value(int $indicator): float
    {
        return NSLevelIndicator::getDoubleValue($indicator);
    }
}

if (! function_exists('ns_levelindicator_set_number_of_tick_marks')) {
    function ns_levelindicator_set_number_of_tick_marks(int $indicator, int $count): void
    {
        NSLevelIndicator::setNumberOfTickMarks($indicator, $count);
    }
}

if (! function_exists('ns_levelindicator_get_number_of_tick_marks')) {
    function ns_levelindicator_get_number_of_tick_marks(int $indicator): int
    {
        return NSLevelIndicator::getNumberOfTickMarks($indicator);
    }
}

if (! function_exists('ns_levelindicator_set_number_of_major_tick_marks')) {
    function ns_levelindicator_set_number_of_major_tick_marks(int $indicator, int $count): void
    {
        NSLevelIndicator::setNumberOfMajorTickMarks($indicator, $count);
    }
}

if (! function_exists('ns_levelindicator_get_number_of_major_tick_marks')) {
    function ns_levelindicator_get_number_of_major_tick_marks(int $indicator): int
    {
        return NSLevelIndicator::getNumberOfMajorTickMarks($indicator);
    }
}

if (! function_exists('ns_levelindicator_set_draws_tiered_capacity_levels')) {
    function ns_levelindicator_set_draws_tiered_capacity_levels(int $indicator, bool $flag): void
    {
        NSLevelIndicator::setDrawsTieredCapacityLevels($indicator, $flag);
    }
}

if (! function_exists('ns_levelindicator_draws_tiered_capacity_levels')) {
    function ns_levelindicator_draws_tiered_capacity_levels(int $indicator): bool
    {
        return NSLevelIndicator::drawsTieredCapacityLevels($indicator);
    }
}

if (! function_exists('ns_levelindicator_set_placeholder_visibility')) {
    function ns_levelindicator_set_placeholder_visibility(int $indicator, LevelIndicatorPlaceholderVisibility|int $visibility): void
    {
        NSLevelIndicator::setPlaceholderVisibility(
            $indicator,
            $visibility instanceof LevelIndicatorPlaceholderVisibility ? $visibility->value : $visibility
        );
    }
}

if (! function_exists('ns_levelindicator_get_placeholder_visibility')) {
    function ns_levelindicator_get_placeholder_visibility(int $indicator): int
    {
        return NSLevelIndicator::getPlaceholderVisibility($indicator);
    }
}
