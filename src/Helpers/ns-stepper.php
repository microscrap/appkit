<?php

use AppKit\NS\NSStepper\NSStepper;

/*
| NSStepper helpers — 1:1 over AppKit\NS\NSStepper\NSStepper
*/

if (! function_exists('ns_stepper_create')) {
    function ns_stepper_create(int $x, int $y, int $width, int $height, float $min = 0.0, float $max = 100.0): int
    {
        return NSStepper::create($x, $y, $width, $height, $min, $max);
    }
}

if (! function_exists('ns_stepper_destroy')) {
    function ns_stepper_destroy(int $stepper): void
    {
        NSStepper::destroy($stepper);
    }
}

if (! function_exists('ns_stepper_set_value')) {
    function ns_stepper_set_value(int $stepper, float $value): void
    {
        NSStepper::setValue($stepper, $value);
    }
}

if (! function_exists('ns_stepper_get_value')) {
    function ns_stepper_get_value(int $stepper): float
    {
        return NSStepper::getValue($stepper);
    }
}

if (! function_exists('ns_stepper_poll_change')) {
    function ns_stepper_poll_change(int $stepper): bool
    {
        return NSStepper::pollChange($stepper);
    }
}
