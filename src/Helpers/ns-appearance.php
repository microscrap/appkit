<?php

use AppKit\NS\NSAppearance\NSAppearance;

/*
| NSAppearance helpers — 1:1 over AppKit\NS\NSAppearance\NSAppearance
*/

if (! function_exists('ns_appearance_wrap')) {
    function ns_appearance_wrap(int $nsAppearancePtr): int
    {
        return NSAppearance::wrap($nsAppearancePtr);
    }
}

if (! function_exists('ns_appearance_destroy')) {
    function ns_appearance_destroy(int $appearance): void
    {
        NSAppearance::destroy($appearance);
    }
}

if (! function_exists('ns_appearance_named')) {
    function ns_appearance_named(string $name): int
    {
        return NSAppearance::named($name);
    }
}

if (! function_exists('ns_appearance_create')) {
    function ns_appearance_create(string $name): int
    {
        return NSAppearance::create($name);
    }
}

if (! function_exists('ns_appearance_current_drawing')) {
    function ns_appearance_current_drawing(): int
    {
        return NSAppearance::currentDrawing();
    }
}

if (! function_exists('ns_appearance_name')) {
    function ns_appearance_name(int $appearance): string
    {
        return NSAppearance::name($appearance);
    }
}

if (! function_exists('ns_appearance_allows_vibrancy')) {
    function ns_appearance_allows_vibrancy(int $appearance): bool
    {
        return NSAppearance::allowsVibrancy($appearance);
    }
}

if (! function_exists('ns_appearance_best_match')) {
    function ns_appearance_best_match(int $appearance, array $names): string
    {
        return NSAppearance::bestMatch($appearance, $names);
    }
}

if (! function_exists('ns_appearance_nsappearance')) {
    function ns_appearance_nsappearance(int $appearance): int
    {
        return NSAppearance::nsAppearance($appearance);
    }
}
