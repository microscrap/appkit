<?php

use AppKit\NS\NSPopover\NSPopover;

/*
| NSPopover helpers — 1:1 over AppKit\NS\NSPopover\NSPopover
*/

if (! function_exists('ns_popover_create')) {
    function ns_popover_create(): int
    {
        return NSPopover::create();
    }
}

if (! function_exists('ns_popover_destroy')) {
    function ns_popover_destroy(int $popover): void
    {
        NSPopover::destroy($popover);
    }
}

if (! function_exists('ns_popover_set_content')) {
    function ns_popover_set_content(int $popover, int $view): void
    {
        NSPopover::setContentView($popover, $view);
    }
}

if (! function_exists('ns_popover_show')) {
    function ns_popover_show(int $popover, int $anchor): void
    {
        NSPopover::show($popover, $anchor);
    }
}

if (! function_exists('ns_popover_close')) {
    function ns_popover_close(int $popover): void
    {
        NSPopover::close($popover);
    }
}

if (! function_exists('ns_popover_is_shown')) {
    function ns_popover_is_shown(int $popover): bool
    {
        return NSPopover::isShown($popover);
    }
}
