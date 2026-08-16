<?php

use AppKit\NS\NSSwitch\NSSwitch;

/*
| NSSwitch helpers — 1:1 over AppKit\NS\NSSwitch\NSSwitch
*/

if (! function_exists('ns_switch_create')) {
    function ns_switch_create(int $x, int $y, int $width, int $height): int
    {
        return NSSwitch::create($x, $y, $width, $height);
    }
}

if (! function_exists('ns_switch_destroy')) {
    function ns_switch_destroy(int $toggle): void
    {
        NSSwitch::destroy($toggle);
    }
}

if (! function_exists('ns_switch_set_on')) {
    function ns_switch_set_on(int $toggle, bool $on): void
    {
        NSSwitch::setOn($toggle, $on);
    }
}

if (! function_exists('ns_switch_is_on')) {
    function ns_switch_is_on(int $toggle): bool
    {
        return NSSwitch::isOn($toggle);
    }
}

if (! function_exists('ns_switch_poll_change')) {
    function ns_switch_poll_change(int $toggle): bool
    {
        return NSSwitch::pollChange($toggle);
    }
}
