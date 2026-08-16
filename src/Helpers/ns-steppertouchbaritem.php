<?php

use AppKit\NS\NSStepperTouchBarItem\NSStepperTouchBarItem;

/*
| NSStepperTouchBarItem helpers — 1:1 over AppKit\NS\NSStepperTouchBarItem\NSStepperTouchBarItem
*/

if (! function_exists('ns_steppertouchbaritem_stepper_with_formatter')) {
    function ns_steppertouchbaritem_stepper_with_formatter(string $identifier): int
    {
        return NSStepperTouchBarItem::stepperWithFormatter($identifier);
    }
}

if (! function_exists('ns_steppertouchbaritem_wrap')) {
    function ns_steppertouchbaritem_wrap(int $ptr): int
    {
        return NSStepperTouchBarItem::wrap($ptr);
    }
}

if (! function_exists('ns_steppertouchbaritem_destroy')) {
    function ns_steppertouchbaritem_destroy(int $item): void
    {
        NSStepperTouchBarItem::destroy($item);
    }
}

if (! function_exists('ns_steppertouchbaritem_nssteppertouchbaritem')) {
    function ns_steppertouchbaritem_nssteppertouchbaritem(int $item): int
    {
        return NSStepperTouchBarItem::nsStepperTouchBarItem($item);
    }
}

if (! function_exists('ns_steppertouchbaritem_set_value')) {
    function ns_steppertouchbaritem_set_value(int $item, float $value): void
    {
        NSStepperTouchBarItem::setValue($item, $value);
    }
}

if (! function_exists('ns_steppertouchbaritem_get_value')) {
    function ns_steppertouchbaritem_get_value(int $item): float
    {
        return NSStepperTouchBarItem::getValue($item);
    }
}

if (! function_exists('ns_steppertouchbaritem_poll_action')) {
    function ns_steppertouchbaritem_poll_action(int $item): bool
    {
        return NSStepperTouchBarItem::pollAction($item);
    }
}
