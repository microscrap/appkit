<?php

use AppKit\NS\NSBitmapImageRep\NSBitmapImageRep;
use Microscrap\Bindings\AppKit\Enums\BitmapImageFileType;

/*
| NSBitmapImageRep helpers — 1:1 over AppKit\NS\NSBitmapImageRep\NSBitmapImageRep
*/

if (! function_exists('ns_bitmapimagerep_wrap')) {
    function ns_bitmapimagerep_wrap(int $nsBitmapImageRepPtr): int
    {
        return NSBitmapImageRep::wrap($nsBitmapImageRepPtr);
    }
}

if (! function_exists('ns_bitmapimagerep_destroy')) {
    function ns_bitmapimagerep_destroy(int $rep): void
    {
        NSBitmapImageRep::destroy($rep);
    }
}

if (! function_exists('ns_bitmapimagerep_nsbitmapimagerep')) {
    function ns_bitmapimagerep_nsbitmapimagerep(int $rep): int
    {
        return NSBitmapImageRep::nsBitmapImageRep($rep);
    }
}

if (! function_exists('ns_bitmapimagerep_with_data')) {
    function ns_bitmapimagerep_with_data(string $data): int
    {
        return NSBitmapImageRep::withData($data);
    }
}

if (! function_exists('ns_bitmapimagerep_rep_with_contents_of_file')) {
    function ns_bitmapimagerep_rep_with_contents_of_file(string $path): int
    {
        return NSBitmapImageRep::repWithContentsOfFile($path);
    }
}

if (! function_exists('ns_bitmapimagerep_with_pixels')) {
    function ns_bitmapimagerep_with_pixels(int $width, int $height, bool $hasAlpha = true): int
    {
        return NSBitmapImageRep::withPixels($width, $height, $hasAlpha);
    }
}

if (! function_exists('ns_bitmapimagerep_with_cgimage')) {
    function ns_bitmapimagerep_with_cgimage(int $cgImagePtr): int
    {
        return NSBitmapImageRep::withCGImage($cgImagePtr);
    }
}

if (! function_exists('ns_bitmapimagerep_is_planar')) {
    function ns_bitmapimagerep_is_planar(int $rep): bool
    {
        return NSBitmapImageRep::isPlanar($rep);
    }
}

if (! function_exists('ns_bitmapimagerep_samples_per_pixel')) {
    function ns_bitmapimagerep_samples_per_pixel(int $rep): int
    {
        return NSBitmapImageRep::samplesPerPixel($rep);
    }
}

if (! function_exists('ns_bitmapimagerep_bits_per_pixel')) {
    function ns_bitmapimagerep_bits_per_pixel(int $rep): int
    {
        return NSBitmapImageRep::bitsPerPixel($rep);
    }
}

if (! function_exists('ns_bitmapimagerep_bytes_per_row')) {
    function ns_bitmapimagerep_bytes_per_row(int $rep): int
    {
        return NSBitmapImageRep::bytesPerRow($rep);
    }
}

if (! function_exists('ns_bitmapimagerep_number_of_planes')) {
    function ns_bitmapimagerep_number_of_planes(int $rep): int
    {
        return NSBitmapImageRep::numberOfPlanes($rep);
    }
}

if (! function_exists('ns_bitmapimagerep_bitmap_data')) {
    function ns_bitmapimagerep_bitmap_data(int $rep): int
    {
        return NSBitmapImageRep::bitmapData($rep);
    }
}

if (! function_exists('ns_bitmapimagerep_get_tiff_representation')) {
    function ns_bitmapimagerep_get_tiff_representation(int $rep): string
    {
        return NSBitmapImageRep::tiffRepresentation($rep);
    }
}

if (! function_exists('ns_bitmapimagerep_representation_using_type')) {
    function ns_bitmapimagerep_representation_using_type(int $rep, BitmapImageFileType|int $fileType): string
    {
        return NSBitmapImageRep::representationUsingType(
            $rep,
            $fileType instanceof BitmapImageFileType ? $fileType->value : $fileType
        );
    }
}

if (! function_exists('ns_bitmapimagerep_set_color_at')) {
    function ns_bitmapimagerep_set_color_at(int $rep, int $x, int $y, int $color): bool
    {
        return NSBitmapImageRep::setColorAt($rep, $x, $y, $color);
    }
}

if (! function_exists('ns_bitmapimagerep_color_at')) {
    function ns_bitmapimagerep_color_at(int $rep, int $x, int $y): int
    {
        return NSBitmapImageRep::colorAt($rep, $x, $y);
    }
}
