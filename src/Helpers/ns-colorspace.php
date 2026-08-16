<?php

use AppKit\NS\NSColorSpace\NSColorSpace;

/*
| NSColorSpace helpers — 1:1 over AppKit\NS\NSColorSpace\NSColorSpace
*/

if (! function_exists('ns_colorspace_wrap')) {
    function ns_colorspace_wrap(int $nsColorSpacePtr): int
    {
        return NSColorSpace::wrap($nsColorSpacePtr);
    }
}

if (! function_exists('ns_colorspace_destroy')) {
    function ns_colorspace_destroy(int $space): void
    {
        NSColorSpace::destroy($space);
    }
}

if (! function_exists('ns_colorspace_standard')) {
    function ns_colorspace_standard(int $kind): int
    {
        return NSColorSpace::standard($kind);
    }
}

if (! function_exists('ns_colorspace_model')) {
    function ns_colorspace_model(int $space): int
    {
        return NSColorSpace::model($space);
    }
}

if (! function_exists('ns_colorspace_number_of_color_components')) {
    function ns_colorspace_number_of_color_components(int $space): int
    {
        return NSColorSpace::numberOfColorComponents($space);
    }
}

if (! function_exists('ns_colorspace_localized_name')) {
    function ns_colorspace_localized_name(int $space): string
    {
        return NSColorSpace::localizedName($space);
    }
}

if (! function_exists('ns_colorspace_available_count')) {
    function ns_colorspace_available_count(int $model = -1): int
    {
        return NSColorSpace::availableCount($model);
    }
}

if (! function_exists('ns_colorspace_available_at')) {
    function ns_colorspace_available_at(int $index, int $model = -1): int
    {
        return NSColorSpace::availableAt($index, $model);
    }
}

if (! function_exists('ns_colorspace_nscolorspace')) {
    function ns_colorspace_nscolorspace(int $space): int
    {
        return NSColorSpace::nsColorSpace($space);
    }
}
