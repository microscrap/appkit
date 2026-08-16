<?php

use AppKit\NS\NSStepperCell\NSStepperCell;

/*
| NSStepperCell helpers — 1:1 over AppKit\NS\NSStepperCell\NSStepperCell
*/

if (! function_exists('ns_steppercell_create_text')) {
    function ns_steppercell_create_text(string $value = ''): int
    {
        return NSStepperCell::createText($value);
    }
}

if (! function_exists('ns_steppercell_wrap')) {
    function ns_steppercell_wrap(int $nsStepperCellPtr): int
    {
        return NSStepperCell::wrap($nsStepperCellPtr);
    }
}

if (! function_exists('ns_steppercell_destroy')) {
    function ns_steppercell_destroy(int $cell): void
    {
        NSStepperCell::destroy($cell);
    }
}

if (! function_exists('ns_steppercell_nssteppercell')) {
    function ns_steppercell_nssteppercell(int $cell): int
    {
        return NSStepperCell::nsStepperCell($cell);
    }
}

if (! function_exists('ns_steppercell_set_title')) {
    function ns_steppercell_set_title(int $cell, string $title): void
    {
        NSStepperCell::setTitle($cell, $title);
    }
}

if (! function_exists('ns_steppercell_get_title')) {
    function ns_steppercell_get_title(int $cell): string
    {
        return NSStepperCell::getTitle($cell);
    }
}

if (! function_exists('ns_steppercell_set_state')) {
    function ns_steppercell_set_state(int $cell, int $state): void
    {
        NSStepperCell::setState($cell, $state);
    }
}

if (! function_exists('ns_steppercell_get_state')) {
    function ns_steppercell_get_state(int $cell): int
    {
        return NSStepperCell::getState($cell);
    }
}

if (! function_exists('ns_steppercell_set_enabled')) {
    function ns_steppercell_set_enabled(int $cell, bool $enabled): void
    {
        NSStepperCell::setEnabled($cell, $enabled);
    }
}

if (! function_exists('ns_steppercell_is_enabled')) {
    function ns_steppercell_is_enabled(int $cell): bool
    {
        return NSStepperCell::isEnabled($cell);
    }
}

if (! function_exists('ns_steppercell_set_tag')) {
    function ns_steppercell_set_tag(int $cell, int $tag): void
    {
        NSStepperCell::setTag($cell, $tag);
    }
}

if (! function_exists('ns_steppercell_get_tag')) {
    function ns_steppercell_get_tag(int $cell): int
    {
        return NSStepperCell::getTag($cell);
    }
}

if (! function_exists('ns_steppercell_set_min_value')) {
    function ns_steppercell_set_min_value(int $cell, float $value): void
    {
        NSStepperCell::setMinValue($cell, $value);
    }
}

if (! function_exists('ns_steppercell_get_min_value')) {
    function ns_steppercell_get_min_value(int $cell): float
    {
        return NSStepperCell::getMinValue($cell);
    }
}

if (! function_exists('ns_steppercell_set_max_value')) {
    function ns_steppercell_set_max_value(int $cell, float $value): void
    {
        NSStepperCell::setMaxValue($cell, $value);
    }
}

if (! function_exists('ns_steppercell_get_max_value')) {
    function ns_steppercell_get_max_value(int $cell): float
    {
        return NSStepperCell::getMaxValue($cell);
    }
}

if (! function_exists('ns_steppercell_set_increment')) {
    function ns_steppercell_set_increment(int $cell, float $value): void
    {
        NSStepperCell::setIncrement($cell, $value);
    }
}

if (! function_exists('ns_steppercell_get_increment')) {
    function ns_steppercell_get_increment(int $cell): float
    {
        return NSStepperCell::getIncrement($cell);
    }
}

if (! function_exists('ns_steppercell_set_value_wraps')) {
    function ns_steppercell_set_value_wraps(int $cell, bool $flag): void
    {
        NSStepperCell::setValueWraps($cell, $flag);
    }
}

if (! function_exists('ns_steppercell_value_wraps')) {
    function ns_steppercell_value_wraps(int $cell): bool
    {
        return NSStepperCell::valueWraps($cell);
    }
}

if (! function_exists('ns_steppercell_set_autorepeat')) {
    function ns_steppercell_set_autorepeat(int $cell, bool $flag): void
    {
        NSStepperCell::setAutorepeat($cell, $flag);
    }
}

if (! function_exists('ns_steppercell_autorepeat')) {
    function ns_steppercell_autorepeat(int $cell): bool
    {
        return NSStepperCell::autorepeat($cell);
    }
}
