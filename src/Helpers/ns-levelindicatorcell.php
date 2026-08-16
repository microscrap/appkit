<?php

use AppKit\NS\NSLevelIndicatorCell\NSLevelIndicatorCell;
use Microscrap\Bindings\AppKit\Enums\LevelIndicatorStyle;

/*
| NSLevelIndicatorCell helpers — 1:1 over AppKit\NS\NSLevelIndicatorCell\NSLevelIndicatorCell
*/

if (! function_exists('ns_levelindicatorcell_create_text')) {
    function ns_levelindicatorcell_create_text(string $value = ''): int
    {
        return NSLevelIndicatorCell::createText($value);
    }
}

if (! function_exists('ns_levelindicatorcell_wrap')) {
    function ns_levelindicatorcell_wrap(int $nsLevelIndicatorCellPtr): int
    {
        return NSLevelIndicatorCell::wrap($nsLevelIndicatorCellPtr);
    }
}

if (! function_exists('ns_levelindicatorcell_destroy')) {
    function ns_levelindicatorcell_destroy(int $cell): void
    {
        NSLevelIndicatorCell::destroy($cell);
    }
}

if (! function_exists('ns_levelindicatorcell_nslevelindicatorcell')) {
    function ns_levelindicatorcell_nslevelindicatorcell(int $cell): int
    {
        return NSLevelIndicatorCell::nsLevelIndicatorCell($cell);
    }
}

if (! function_exists('ns_levelindicatorcell_set_title')) {
    function ns_levelindicatorcell_set_title(int $cell, string $title): void
    {
        NSLevelIndicatorCell::setTitle($cell, $title);
    }
}

if (! function_exists('ns_levelindicatorcell_get_title')) {
    function ns_levelindicatorcell_get_title(int $cell): string
    {
        return NSLevelIndicatorCell::getTitle($cell);
    }
}

if (! function_exists('ns_levelindicatorcell_set_state')) {
    function ns_levelindicatorcell_set_state(int $cell, int $state): void
    {
        NSLevelIndicatorCell::setState($cell, $state);
    }
}

if (! function_exists('ns_levelindicatorcell_get_state')) {
    function ns_levelindicatorcell_get_state(int $cell): int
    {
        return NSLevelIndicatorCell::getState($cell);
    }
}

if (! function_exists('ns_levelindicatorcell_set_enabled')) {
    function ns_levelindicatorcell_set_enabled(int $cell, bool $enabled): void
    {
        NSLevelIndicatorCell::setEnabled($cell, $enabled);
    }
}

if (! function_exists('ns_levelindicatorcell_is_enabled')) {
    function ns_levelindicatorcell_is_enabled(int $cell): bool
    {
        return NSLevelIndicatorCell::isEnabled($cell);
    }
}

if (! function_exists('ns_levelindicatorcell_set_tag')) {
    function ns_levelindicatorcell_set_tag(int $cell, int $tag): void
    {
        NSLevelIndicatorCell::setTag($cell, $tag);
    }
}

if (! function_exists('ns_levelindicatorcell_get_tag')) {
    function ns_levelindicatorcell_get_tag(int $cell): int
    {
        return NSLevelIndicatorCell::getTag($cell);
    }
}

if (! function_exists('ns_levelindicatorcell_set_level_indicator_style')) {
    function ns_levelindicatorcell_set_level_indicator_style(int $cell, LevelIndicatorStyle|int $style): void
    {
        NSLevelIndicatorCell::setLevelIndicatorStyle(
            $cell,
            $style instanceof LevelIndicatorStyle ? $style->value : $style
        );
    }
}

if (! function_exists('ns_levelindicatorcell_get_level_indicator_style')) {
    function ns_levelindicatorcell_get_level_indicator_style(int $cell): int
    {
        return NSLevelIndicatorCell::getLevelIndicatorStyle($cell);
    }
}

if (! function_exists('ns_levelindicatorcell_set_editable')) {
    function ns_levelindicatorcell_set_editable(int $cell, bool $flag): void
    {
        NSLevelIndicatorCell::setEditable($cell, $flag);
    }
}

if (! function_exists('ns_levelindicatorcell_is_editable')) {
    function ns_levelindicatorcell_is_editable(int $cell): bool
    {
        return NSLevelIndicatorCell::isEditable($cell);
    }
}

if (! function_exists('ns_levelindicatorcell_set_min_value')) {
    function ns_levelindicatorcell_set_min_value(int $cell, float $value): void
    {
        NSLevelIndicatorCell::setMinValue($cell, $value);
    }
}

if (! function_exists('ns_levelindicatorcell_get_min_value')) {
    function ns_levelindicatorcell_get_min_value(int $cell): float
    {
        return NSLevelIndicatorCell::getMinValue($cell);
    }
}

if (! function_exists('ns_levelindicatorcell_set_max_value')) {
    function ns_levelindicatorcell_set_max_value(int $cell, float $value): void
    {
        NSLevelIndicatorCell::setMaxValue($cell, $value);
    }
}

if (! function_exists('ns_levelindicatorcell_get_max_value')) {
    function ns_levelindicatorcell_get_max_value(int $cell): float
    {
        return NSLevelIndicatorCell::getMaxValue($cell);
    }
}

if (! function_exists('ns_levelindicatorcell_set_warning_value')) {
    function ns_levelindicatorcell_set_warning_value(int $cell, float $value): void
    {
        NSLevelIndicatorCell::setWarningValue($cell, $value);
    }
}

if (! function_exists('ns_levelindicatorcell_get_warning_value')) {
    function ns_levelindicatorcell_get_warning_value(int $cell): float
    {
        return NSLevelIndicatorCell::getWarningValue($cell);
    }
}

if (! function_exists('ns_levelindicatorcell_set_critical_value')) {
    function ns_levelindicatorcell_set_critical_value(int $cell, float $value): void
    {
        NSLevelIndicatorCell::setCriticalValue($cell, $value);
    }
}

if (! function_exists('ns_levelindicatorcell_get_critical_value')) {
    function ns_levelindicatorcell_get_critical_value(int $cell): float
    {
        return NSLevelIndicatorCell::getCriticalValue($cell);
    }
}

if (! function_exists('ns_levelindicatorcell_set_double_value')) {
    function ns_levelindicatorcell_set_double_value(int $cell, float $value): void
    {
        NSLevelIndicatorCell::setDoubleValue($cell, $value);
    }
}

if (! function_exists('ns_levelindicatorcell_get_double_value')) {
    function ns_levelindicatorcell_get_double_value(int $cell): float
    {
        return NSLevelIndicatorCell::getDoubleValue($cell);
    }
}
