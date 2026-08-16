<?php

use AppKit\NS\NSImage\NSImage;
use Microscrap\Bindings\AppKit\Enums\ImageCacheMode;

/*
| NSImage helpers — 1:1 over AppKit\NS\NSImage\NSImage
*/

if (! function_exists('ns_image_wrap')) {
    function ns_image_wrap(int $nsImagePtr): int
    {
        return NSImage::wrap($nsImagePtr);
    }
}

if (! function_exists('ns_image_destroy')) {
    function ns_image_destroy(int $image): void
    {
        NSImage::destroy($image);
    }
}

if (! function_exists('ns_image_nsimage')) {
    function ns_image_nsimage(int $image): int
    {
        return NSImage::nsImage($image);
    }
}

if (! function_exists('ns_image_named')) {
    function ns_image_named(string $name): int
    {
        return NSImage::named($name);
    }
}

if (! function_exists('ns_image_with_system_symbol_name')) {
    function ns_image_with_system_symbol_name(string $name, string $description = ''): int
    {
        return NSImage::withSystemSymbolName($name, $description);
    }
}

if (! function_exists('ns_image_with_size')) {
    function ns_image_with_size(float $width, float $height): int
    {
        return NSImage::withSize($width, $height);
    }
}

if (! function_exists('ns_image_with_contents_of_file')) {
    function ns_image_with_contents_of_file(string $path): int
    {
        return NSImage::withContentsOfFile($path);
    }
}

if (! function_exists('ns_image_with_data')) {
    function ns_image_with_data(string $data): int
    {
        return NSImage::withData($data);
    }
}

if (! function_exists('ns_image_by_referencing_file')) {
    function ns_image_by_referencing_file(string $path): int
    {
        return NSImage::byReferencingFile($path);
    }
}

if (! function_exists('ns_image_get_size')) {
    function ns_image_get_size(int $image): array
    {
        return NSImage::getSize($image);
    }
}

if (! function_exists('ns_image_set_size')) {
    function ns_image_set_size(int $image, float $width, float $height): void
    {
        NSImage::setSize($image, $width, $height);
    }
}

if (! function_exists('ns_image_is_valid')) {
    function ns_image_is_valid(int $image): bool
    {
        return NSImage::isValid($image);
    }
}

if (! function_exists('ns_image_is_template')) {
    function ns_image_is_template(int $image): bool
    {
        return NSImage::isTemplate($image);
    }
}

if (! function_exists('ns_image_set_template')) {
    function ns_image_set_template(int $image, bool $isTemplate): void
    {
        NSImage::setTemplate($image, $isTemplate);
    }
}

if (! function_exists('ns_image_set_name')) {
    function ns_image_set_name(int $image, string $name): bool
    {
        return NSImage::setName($image, $name);
    }
}

if (! function_exists('ns_image_get_name')) {
    function ns_image_get_name(int $image): string
    {
        return NSImage::getName($image);
    }
}

if (! function_exists('ns_image_add_representation')) {
    function ns_image_add_representation(int $image, int $rep): void
    {
        NSImage::addRepresentation($image, $rep);
    }
}

if (! function_exists('ns_image_remove_representation')) {
    function ns_image_remove_representation(int $image, int $rep): void
    {
        NSImage::removeRepresentation($image, $rep);
    }
}

if (! function_exists('ns_image_representation_count')) {
    function ns_image_representation_count(int $image): int
    {
        return NSImage::representationCount($image);
    }
}

if (! function_exists('ns_image_representation_at')) {
    function ns_image_representation_at(int $image, int $index): int
    {
        return NSImage::representationAt($image, $index);
    }
}

if (! function_exists('ns_image_draw_in_rect')) {
    function ns_image_draw_in_rect(int $image, float $x, float $y, float $width, float $height): bool
    {
        return NSImage::drawInRect($image, $x, $y, $width, $height);
    }
}

if (! function_exists('ns_image_get_tiff_representation')) {
    function ns_image_get_tiff_representation(int $image): string
    {
        return NSImage::tiffRepresentation($image);
    }
}

if (! function_exists('ns_image_get_cache_mode')) {
    function ns_image_get_cache_mode(int $image): int
    {
        return NSImage::cacheMode($image);
    }
}

if (! function_exists('ns_image_set_cache_mode')) {
    function ns_image_set_cache_mode(int $image, ImageCacheMode|int $mode): void
    {
        NSImage::setCacheMode($image, $mode instanceof ImageCacheMode ? $mode->value : $mode);
    }
}

if (! function_exists('ns_image_get_accessibility_description')) {
    function ns_image_get_accessibility_description(int $image): string
    {
        return NSImage::getAccessibilityDescription($image);
    }
}

if (! function_exists('ns_image_set_accessibility_description')) {
    function ns_image_set_accessibility_description(int $image, string $description): void
    {
        NSImage::setAccessibilityDescription($image, $description);
    }
}
