<?php

use AppKit\NS\NSFontDescriptor\NSFontDescriptor;
use Microscrap\Bindings\AppKit\Enums\FontDescriptorSymbolicTrait;
use Microscrap\Bindings\AppKit\Enums\FontDesignKind;
use Microscrap\Bindings\AppKit\Enums\FontTextStyleKind;

/*
| NSFontDescriptor helpers — 1:1 over AppKit\NS\NSFontDescriptor\NSFontDescriptor
*/

if (! function_exists('ns_fontdescriptor_wrap')) {
    function ns_fontdescriptor_wrap(int $nsFontDescriptorPtr): int
    {
        return NSFontDescriptor::wrap($nsFontDescriptorPtr);
    }
}

if (! function_exists('ns_fontdescriptor_destroy')) {
    function ns_fontdescriptor_destroy(int $descriptor): void
    {
        NSFontDescriptor::destroy($descriptor);
    }
}

if (! function_exists('ns_fontdescriptor_with_name')) {
    function ns_fontdescriptor_with_name(string $name, float $size): int
    {
        return NSFontDescriptor::withName($name, $size);
    }
}

if (! function_exists('ns_fontdescriptor_preferred_for_text_style')) {
    function ns_fontdescriptor_preferred_for_text_style(FontTextStyleKind|int $styleKind): int
    {
        return NSFontDescriptor::preferredForTextStyle($styleKind instanceof FontTextStyleKind ? $styleKind->value : $styleKind);
    }
}

if (! function_exists('ns_fontdescriptor_postscript_name')) {
    function ns_fontdescriptor_postscript_name(int $descriptor): string
    {
        return NSFontDescriptor::postscriptName($descriptor);
    }
}

if (! function_exists('ns_fontdescriptor_point_size')) {
    function ns_fontdescriptor_point_size(int $descriptor): float
    {
        return NSFontDescriptor::pointSize($descriptor);
    }
}

if (! function_exists('ns_fontdescriptor_symbolic_traits')) {
    function ns_fontdescriptor_symbolic_traits(int $descriptor): int
    {
        return NSFontDescriptor::symbolicTraits($descriptor);
    }
}

if (! function_exists('ns_fontdescriptor_requires_font_asset_request')) {
    function ns_fontdescriptor_requires_font_asset_request(int $descriptor): bool
    {
        return NSFontDescriptor::requiresFontAssetRequest($descriptor);
    }
}

if (! function_exists('ns_fontdescriptor_with_symbolic_traits')) {
    function ns_fontdescriptor_with_symbolic_traits(int $descriptor, FontDescriptorSymbolicTrait|int $traits): int
    {
        return NSFontDescriptor::withSymbolicTraits(
            $descriptor,
            $traits instanceof FontDescriptorSymbolicTrait ? $traits->value : $traits,
        );
    }
}

if (! function_exists('ns_fontdescriptor_with_size')) {
    function ns_fontdescriptor_with_size(int $descriptor, float $size): int
    {
        return NSFontDescriptor::withSize($descriptor, $size);
    }
}

if (! function_exists('ns_fontdescriptor_with_family')) {
    function ns_fontdescriptor_with_family(int $descriptor, string $family): int
    {
        return NSFontDescriptor::withFamily($descriptor, $family);
    }
}

if (! function_exists('ns_fontdescriptor_with_face')) {
    function ns_fontdescriptor_with_face(int $descriptor, string $face): int
    {
        return NSFontDescriptor::withFace($descriptor, $face);
    }
}

if (! function_exists('ns_fontdescriptor_with_design')) {
    function ns_fontdescriptor_with_design(int $descriptor, FontDesignKind|int $designKind): int
    {
        return NSFontDescriptor::withDesign(
            $descriptor,
            $designKind instanceof FontDesignKind ? $designKind->value : $designKind,
        );
    }
}

if (! function_exists('ns_fontdescriptor_matching_count')) {
    function ns_fontdescriptor_matching_count(int $descriptor): int
    {
        return NSFontDescriptor::matchingCount($descriptor);
    }
}

if (! function_exists('ns_fontdescriptor_matching_at')) {
    function ns_fontdescriptor_matching_at(int $descriptor, int $index): int
    {
        return NSFontDescriptor::matchingAt($descriptor, $index);
    }
}

if (! function_exists('ns_fontdescriptor_matching_first')) {
    function ns_fontdescriptor_matching_first(int $descriptor): int
    {
        return NSFontDescriptor::matchingFirst($descriptor);
    }
}

if (! function_exists('ns_fontdescriptor_nsfontdescriptor')) {
    function ns_fontdescriptor_nsfontdescriptor(int $descriptor): int
    {
        return NSFontDescriptor::nsFontDescriptor($descriptor);
    }
}
