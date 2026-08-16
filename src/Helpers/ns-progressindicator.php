<?php

use AppKit\NS\NSProgressIndicator\NSProgressIndicator;

/*
| NSProgressIndicator helpers — 1:1 over AppKit\NS\NSProgressIndicator\NSProgressIndicator
*/

if (! function_exists('ns_progressindicator_create')) {
    function ns_progressindicator_create(int $x, int $y, int $width, int $height): int
    {
        return NSProgressIndicator::create($x, $y, $width, $height);
    }
}

if (! function_exists('ns_progressindicator_destroy')) {
    function ns_progressindicator_destroy(int $bar): void
    {
        NSProgressIndicator::destroy($bar);
    }
}

if (! function_exists('ns_progressindicator_set_indeterminate')) {
    function ns_progressindicator_set_indeterminate(int $bar, bool $on): void
    {
        NSProgressIndicator::setIndeterminate($bar, $on);
    }
}

if (! function_exists('ns_progressindicator_set_min')) {
    function ns_progressindicator_set_min(int $bar, float $min): void
    {
        NSProgressIndicator::setMin($bar, $min);
    }
}

if (! function_exists('ns_progressindicator_set_max')) {
    function ns_progressindicator_set_max(int $bar, float $max): void
    {
        NSProgressIndicator::setMax($bar, $max);
    }
}

if (! function_exists('ns_progressindicator_set_value')) {
    function ns_progressindicator_set_value(int $bar, float $value): void
    {
        NSProgressIndicator::setValue($bar, $value);
    }
}

if (! function_exists('ns_progressindicator_get_value')) {
    function ns_progressindicator_get_value(int $bar): float
    {
        return NSProgressIndicator::getValue($bar);
    }
}

if (! function_exists('ns_progressindicator_start')) {
    function ns_progressindicator_start(int $bar): void
    {
        NSProgressIndicator::start($bar);
    }
}

if (! function_exists('ns_progressindicator_stop')) {
    function ns_progressindicator_stop(int $bar): void
    {
        NSProgressIndicator::stop($bar);
    }
}
