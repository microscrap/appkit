<?php

use AppKit\NS\NSImageRep\NSImageRep;
use Microscrap\Bindings\AppKit\Enums\ImageLayoutDirection;

/*
| NSImageRep helpers — 1:1 over AppKit\NS\NSImageRep\NSImageRep
*/

if (! function_exists('ns_imagerep_wrap')) {
    function ns_imagerep_wrap(int $nsImageRepPtr): int
    {
        return NSImageRep::wrap($nsImageRepPtr);
    }
}

if (! function_exists('ns_imagerep_destroy')) {
    function ns_imagerep_destroy(int $rep): void
    {
        NSImageRep::destroy($rep);
    }
}

if (! function_exists('ns_imagerep_nsimagerep')) {
    function ns_imagerep_nsimagerep(int $rep): int
    {
        return NSImageRep::nsImageRep($rep);
    }
}

if (! function_exists('ns_imagerep_rep_with_contents_of_file')) {
    function ns_imagerep_rep_with_contents_of_file(string $path): int
    {
        return NSImageRep::repWithContentsOfFile($path);
    }
}

if (! function_exists('ns_imagerep_get_size')) {
    function ns_imagerep_get_size(int $rep): array
    {
        return NSImageRep::getSize($rep);
    }
}

if (! function_exists('ns_imagerep_set_size')) {
    function ns_imagerep_set_size(int $rep, float $width, float $height): void
    {
        NSImageRep::setSize($rep, $width, $height);
    }
}

if (! function_exists('ns_imagerep_has_alpha')) {
    function ns_imagerep_has_alpha(int $rep): bool
    {
        return NSImageRep::hasAlpha($rep);
    }
}

if (! function_exists('ns_imagerep_is_opaque')) {
    function ns_imagerep_is_opaque(int $rep): bool
    {
        return NSImageRep::isOpaque($rep);
    }
}

if (! function_exists('ns_imagerep_pixels_wide')) {
    function ns_imagerep_pixels_wide(int $rep): int
    {
        return NSImageRep::pixelsWide($rep);
    }
}

if (! function_exists('ns_imagerep_pixels_high')) {
    function ns_imagerep_pixels_high(int $rep): int
    {
        return NSImageRep::pixelsHigh($rep);
    }
}

if (! function_exists('ns_imagerep_bits_per_sample')) {
    function ns_imagerep_bits_per_sample(int $rep): int
    {
        return NSImageRep::bitsPerSample($rep);
    }
}

if (! function_exists('ns_imagerep_layout_direction')) {
    function ns_imagerep_layout_direction(int $rep): int
    {
        return NSImageRep::layoutDirection($rep);
    }
}

if (! function_exists('ns_imagerep_set_layout_direction')) {
    function ns_imagerep_set_layout_direction(int $rep, ImageLayoutDirection|int $direction): void
    {
        NSImageRep::setLayoutDirection($rep, $direction instanceof ImageLayoutDirection ? $direction->value : $direction);
    }
}

if (! function_exists('ns_imagerep_draw')) {
    function ns_imagerep_draw(int $rep): bool
    {
        return NSImageRep::draw($rep);
    }
}

if (! function_exists('ns_imagerep_draw_at_point')) {
    function ns_imagerep_draw_at_point(int $rep, float $x, float $y): bool
    {
        return NSImageRep::drawAtPoint($rep, $x, $y);
    }
}

if (! function_exists('ns_imagerep_draw_in_rect')) {
    function ns_imagerep_draw_in_rect(int $rep, float $x, float $y, float $width, float $height): bool
    {
        return NSImageRep::drawInRect($rep, $x, $y, $width, $height);
    }
}

if (! function_exists('ns_imagerep_image_type_count')) {
    function ns_imagerep_image_type_count(): int
    {
        return NSImageRep::imageTypeCount();
    }
}

if (! function_exists('ns_imagerep_image_type_at')) {
    function ns_imagerep_image_type_at(int $index): string
    {
        return NSImageRep::imageTypeAt($index);
    }
}
