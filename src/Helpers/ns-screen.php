<?php

use AppKit\NS\NSScreen\NSScreen;

/*
| NSScreen helpers — 1:1 over AppKit\NS\NSScreen\NSScreen
*/

if (! function_exists('ns_screen_wrap')) {
    function ns_screen_wrap(int $nsScreenPtr): int
    {
        return NSScreen::wrap($nsScreenPtr);
    }
}

if (! function_exists('ns_screen_destroy')) {
    function ns_screen_destroy(int $screen): void
    {
        NSScreen::destroy($screen);
    }
}

if (! function_exists('ns_screen_main')) {
    function ns_screen_main(): int
    {
        return NSScreen::mainScreen();
    }
}

if (! function_exists('ns_screen_deepest')) {
    function ns_screen_deepest(): int
    {
        return NSScreen::deepestScreen();
    }
}

if (! function_exists('ns_screen_screens_count')) {
    function ns_screen_screens_count(): int
    {
        return NSScreen::screensCount();
    }
}

if (! function_exists('ns_screen_screens_at')) {
    function ns_screen_screens_at(int $index): int
    {
        return NSScreen::screenAt($index);
    }
}

if (! function_exists('ns_screen_screens_have_separate_spaces')) {
    function ns_screen_screens_have_separate_spaces(): bool
    {
        return NSScreen::screensHaveSeparateSpaces();
    }
}

if (! function_exists('ns_screen_frame')) {
    function ns_screen_frame(int $screen): array
    {
        return NSScreen::frame($screen);
    }
}

if (! function_exists('ns_screen_visible_frame')) {
    function ns_screen_visible_frame(int $screen): array
    {
        return NSScreen::visibleFrame($screen);
    }
}

if (! function_exists('ns_screen_backing_scale_factor')) {
    function ns_screen_backing_scale_factor(int $screen): float
    {
        return NSScreen::backingScaleFactor($screen);
    }
}

if (! function_exists('ns_screen_localized_name')) {
    function ns_screen_localized_name(int $screen): string
    {
        return NSScreen::localizedName($screen);
    }
}

if (! function_exists('ns_screen_depth')) {
    function ns_screen_depth(int $screen): int
    {
        return NSScreen::depth($screen);
    }
}

if (! function_exists('ns_screen_nsscreen')) {
    function ns_screen_nsscreen(int $screen): int
    {
        return NSScreen::nsScreen($screen);
    }
}
