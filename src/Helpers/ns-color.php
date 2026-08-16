<?php

use AppKit\NS\NSColor\NSColor;

/*
| NSColor helpers — 1:1 over AppKit\NS\NSColor\NSColor
*/

if (! function_exists('ns_color_wrap')) {
    function ns_color_wrap(int $nsColorPtr): int
    {
        return NSColor::wrap($nsColorPtr);
    }
}

if (! function_exists('ns_color_destroy')) {
    function ns_color_destroy(int $color): void
    {
        NSColor::destroy($color);
    }
}

if (! function_exists('ns_color_with_rgba')) {
    function ns_color_with_rgba(float $red, float $green, float $blue, float $alpha = 1.0): int
    {
        return NSColor::withRgba($red, $green, $blue, $alpha);
    }
}

if (! function_exists('ns_color_with_srgb_bytes')) {
    function ns_color_with_srgb_bytes(int $red, int $green, int $blue, int $alpha = 255): int
    {
        return NSColor::withSrgbBytes($red, $green, $blue, $alpha);
    }
}

if (! function_exists('ns_color_with_white')) {
    function ns_color_with_white(float $white, float $alpha = 1.0): int
    {
        return NSColor::withWhite($white, $alpha);
    }
}

if (! function_exists('ns_color_with_hsb')) {
    function ns_color_with_hsb(float $hue, float $saturation, float $brightness, float $alpha = 1.0): int
    {
        return NSColor::withHsb($hue, $saturation, $brightness, $alpha);
    }
}

if (! function_exists('ns_color_named')) {
    function ns_color_named(string $name): int
    {
        return NSColor::named($name);
    }
}

if (! function_exists('ns_color_with_catalog')) {
    function ns_color_with_catalog(string $listName, string $colorName): int
    {
        return NSColor::withCatalog($listName, $colorName);
    }
}

if (! function_exists('ns_color_standard')) {
    function ns_color_standard(int $kind): int
    {
        return NSColor::standard($kind);
    }
}

if (! function_exists('ns_color_with_alpha')) {
    function ns_color_with_alpha(int $color, float $alpha): int
    {
        return NSColor::withAlpha($color, $alpha);
    }
}

if (! function_exists('ns_color_using_color_space')) {
    function ns_color_using_color_space(int $color, int $space): int
    {
        return NSColor::usingColorSpace($color, $space);
    }
}

if (! function_exists('ns_color_type')) {
    function ns_color_type(int $color): int
    {
        return NSColor::type($color);
    }
}

if (! function_exists('ns_color_alpha')) {
    function ns_color_alpha(int $color): float
    {
        return NSColor::alpha($color);
    }
}

if (! function_exists('ns_color_get_srgba')) {
    function ns_color_get_srgba(int $color): array
    {
        return NSColor::getSrgba($color);
    }
}

if (! function_exists('ns_color_get_rgba_double')) {
    function ns_color_get_rgba_double(int $color): array
    {
        return NSColor::getRgbaDouble($color);
    }
}

if (! function_exists('ns_color_set')) {
    function ns_color_set(int $color): void
    {
        NSColor::set($color);
    }
}

if (! function_exists('ns_color_set_fill')) {
    function ns_color_set_fill(int $color): void
    {
        NSColor::setFill($color);
    }
}

if (! function_exists('ns_color_set_stroke')) {
    function ns_color_set_stroke(int $color): void
    {
        NSColor::setStroke($color);
    }
}

if (! function_exists('ns_color_catalog_name')) {
    function ns_color_catalog_name(int $color): string
    {
        return NSColor::catalogName($color);
    }
}

if (! function_exists('ns_color_color_name')) {
    function ns_color_color_name(int $color): string
    {
        return NSColor::colorName($color);
    }
}

if (! function_exists('ns_color_nscolor')) {
    function ns_color_nscolor(int $color): int
    {
        return NSColor::nsColor($color);
    }
}
