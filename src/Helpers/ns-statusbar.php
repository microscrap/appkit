<?php

use AppKit\NS\NSStatusBar\NSStatusBar;
use Microscrap\Bindings\AppKit\Enums\StatusItemLengthKind;

/*
| NSStatusBar helpers — 1:1 over AppKit\NS\NSStatusBar\NSStatusBar
*/

if (! function_exists('ns_statusbar_system')) {
    function ns_statusbar_system(): int
    {
        return NSStatusBar::system();
    }
}

if (! function_exists('ns_statusbar_wrap')) {
    function ns_statusbar_wrap(int $nsStatusBarPtr): int
    {
        return NSStatusBar::wrap($nsStatusBarPtr);
    }
}

if (! function_exists('ns_statusbar_destroy')) {
    function ns_statusbar_destroy(int $bar): void
    {
        NSStatusBar::destroy($bar);
    }
}

if (! function_exists('ns_statusbar_nsstatusbar')) {
    function ns_statusbar_nsstatusbar(int $bar): int
    {
        return NSStatusBar::nsStatusBar($bar);
    }
}

if (! function_exists('ns_statusbar_status_item_with_length')) {
    function ns_statusbar_status_item_with_length(int $bar, float $length): int
    {
        return NSStatusBar::statusItemWithLength($bar, $length);
    }
}

if (! function_exists('ns_statusbar_status_item_with_kind')) {
    function ns_statusbar_status_item_with_kind(int $bar, StatusItemLengthKind|int $kind): int
    {
        return NSStatusBar::statusItemWithKind(
            $bar,
            $kind instanceof StatusItemLengthKind ? $kind->value : $kind
        );
    }
}

if (! function_exists('ns_statusbar_remove_status_item')) {
    function ns_statusbar_remove_status_item(int $bar, int $item): void
    {
        NSStatusBar::removeStatusItem($bar, $item);
    }
}

if (! function_exists('ns_statusbar_is_vertical')) {
    function ns_statusbar_is_vertical(int $bar): bool
    {
        return NSStatusBar::isVertical($bar);
    }
}

if (! function_exists('ns_statusbar_thickness')) {
    function ns_statusbar_thickness(int $bar): float
    {
        return NSStatusBar::thickness($bar);
    }
}
