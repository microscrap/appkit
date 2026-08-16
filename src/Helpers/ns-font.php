<?php

use AppKit\NS\NSFont\NSFont;
use Microscrap\Bindings\AppKit\Enums\ControlSize;
use Microscrap\Bindings\AppKit\Enums\FontMetaKind;
use Microscrap\Bindings\AppKit\Enums\FontTextStyleKind;
use Microscrap\Bindings\AppKit\Enums\FontWeightKind;
use Microscrap\Bindings\AppKit\Enums\FontWidthKind;

/*
| NSFont helpers — 1:1 over AppKit\NS\NSFont\NSFont
*/

if (! function_exists('ns_font_wrap')) {
    function ns_font_wrap(int $nsFontPtr): int
    {
        return NSFont::wrap($nsFontPtr);
    }
}

if (! function_exists('ns_font_destroy')) {
    function ns_font_destroy(int $font): void
    {
        NSFont::destroy($font);
    }
}

if (! function_exists('ns_font_with_name')) {
    function ns_font_with_name(string $name, float $size): int
    {
        return NSFont::withName($name, $size);
    }
}

if (! function_exists('ns_font_with_descriptor')) {
    function ns_font_with_descriptor(int $descriptor, float $size = 0.0): int
    {
        return NSFont::withDescriptor($descriptor, $size);
    }
}

if (! function_exists('ns_font_meta')) {
    function ns_font_meta(FontMetaKind|int $kind, float $size): int
    {
        return NSFont::meta($kind instanceof FontMetaKind ? $kind->value : $kind, $size);
    }
}

if (! function_exists('ns_font_system_weight')) {
    function ns_font_system_weight(float $size, FontWeightKind|int $weightKind = FontWeightKind::REGULAR): int
    {
        return NSFont::systemWeight($size, $weightKind instanceof FontWeightKind ? $weightKind->value : $weightKind);
    }
}

if (! function_exists('ns_font_system_weight_width')) {
    function ns_font_system_weight_width(
        float $size,
        FontWeightKind|int $weightKind = FontWeightKind::REGULAR,
        FontWidthKind|int $widthKind = FontWidthKind::STANDARD,
    ): int {
        return NSFont::systemWeightWidth(
            $size,
            $weightKind instanceof FontWeightKind ? $weightKind->value : $weightKind,
            $widthKind instanceof FontWidthKind ? $widthKind->value : $widthKind,
        );
    }
}

if (! function_exists('ns_font_monospaced_digit_system')) {
    function ns_font_monospaced_digit_system(float $size, FontWeightKind|int $weightKind = FontWeightKind::REGULAR): int
    {
        return NSFont::monospacedDigitSystem($size, $weightKind instanceof FontWeightKind ? $weightKind->value : $weightKind);
    }
}

if (! function_exists('ns_font_monospaced_system')) {
    function ns_font_monospaced_system(float $size, FontWeightKind|int $weightKind = FontWeightKind::REGULAR): int
    {
        return NSFont::monospacedSystem($size, $weightKind instanceof FontWeightKind ? $weightKind->value : $weightKind);
    }
}

if (! function_exists('ns_font_preferred_for_text_style')) {
    function ns_font_preferred_for_text_style(FontTextStyleKind|int $styleKind): int
    {
        return NSFont::preferredForTextStyle($styleKind instanceof FontTextStyleKind ? $styleKind->value : $styleKind);
    }
}

if (! function_exists('ns_font_with_size')) {
    function ns_font_with_size(int $font, float $size): int
    {
        return NSFont::withSize($font, $size);
    }
}

if (! function_exists('ns_font_set_user_font')) {
    function ns_font_set_user_font(int $font): void
    {
        NSFont::setUserFont($font);
    }
}

if (! function_exists('ns_font_set_user_fixed_pitch_font')) {
    function ns_font_set_user_fixed_pitch_font(int $font): void
    {
        NSFont::setUserFixedPitchFont($font);
    }
}

if (! function_exists('ns_font_system_font_size')) {
    function ns_font_system_font_size(): float
    {
        return NSFont::systemFontSize();
    }
}

if (! function_exists('ns_font_small_system_font_size')) {
    function ns_font_small_system_font_size(): float
    {
        return NSFont::smallSystemFontSize();
    }
}

if (! function_exists('ns_font_label_font_size')) {
    function ns_font_label_font_size(): float
    {
        return NSFont::labelFontSize();
    }
}

if (! function_exists('ns_font_system_font_size_for_control_size')) {
    function ns_font_system_font_size_for_control_size(ControlSize|int $controlSize): float
    {
        return NSFont::systemFontSizeForControlSize($controlSize instanceof ControlSize ? $controlSize->value : $controlSize);
    }
}

if (! function_exists('ns_font_font_name')) {
    function ns_font_font_name(int $font): string
    {
        return NSFont::fontName($font);
    }
}

if (! function_exists('ns_font_family_name')) {
    function ns_font_family_name(int $font): string
    {
        return NSFont::familyName($font);
    }
}

if (! function_exists('ns_font_display_name')) {
    function ns_font_display_name(int $font): string
    {
        return NSFont::displayName($font);
    }
}

if (! function_exists('ns_font_point_size')) {
    function ns_font_point_size(int $font): float
    {
        return NSFont::pointSize($font);
    }
}

if (! function_exists('ns_font_font_descriptor')) {
    function ns_font_font_descriptor(int $font): int
    {
        return NSFont::fontDescriptor($font);
    }
}

if (! function_exists('ns_font_number_of_glyphs')) {
    function ns_font_number_of_glyphs(int $font): int
    {
        return NSFont::numberOfGlyphs($font);
    }
}

if (! function_exists('ns_font_is_fixed_pitch')) {
    function ns_font_is_fixed_pitch(int $font): bool
    {
        return NSFont::isFixedPitch($font);
    }
}

if (! function_exists('ns_font_is_vertical')) {
    function ns_font_is_vertical(int $font): bool
    {
        return NSFont::isVertical($font);
    }
}

if (! function_exists('ns_font_vertical_font')) {
    function ns_font_vertical_font(int $font): int
    {
        return NSFont::verticalFont($font);
    }
}

if (! function_exists('ns_font_ascender')) {
    function ns_font_ascender(int $font): float
    {
        return NSFont::ascender($font);
    }
}

if (! function_exists('ns_font_descender')) {
    function ns_font_descender(int $font): float
    {
        return NSFont::descender($font);
    }
}

if (! function_exists('ns_font_leading')) {
    function ns_font_leading(int $font): float
    {
        return NSFont::leading($font);
    }
}

if (! function_exists('ns_font_underline_position')) {
    function ns_font_underline_position(int $font): float
    {
        return NSFont::underlinePosition($font);
    }
}

if (! function_exists('ns_font_underline_thickness')) {
    function ns_font_underline_thickness(int $font): float
    {
        return NSFont::underlineThickness($font);
    }
}

if (! function_exists('ns_font_italic_angle')) {
    function ns_font_italic_angle(int $font): float
    {
        return NSFont::italicAngle($font);
    }
}

if (! function_exists('ns_font_cap_height')) {
    function ns_font_cap_height(int $font): float
    {
        return NSFont::capHeight($font);
    }
}

if (! function_exists('ns_font_x_height')) {
    function ns_font_x_height(int $font): float
    {
        return NSFont::xHeight($font);
    }
}

if (! function_exists('ns_font_bounding_rect')) {
    function ns_font_bounding_rect(int $font): array
    {
        return NSFont::boundingRect($font);
    }
}

if (! function_exists('ns_font_maximum_advancement')) {
    function ns_font_maximum_advancement(int $font): array
    {
        return NSFont::maximumAdvancement($font);
    }
}

if (! function_exists('ns_font_set')) {
    function ns_font_set(int $font): void
    {
        NSFont::set($font);
    }
}

if (! function_exists('ns_font_nsfont')) {
    function ns_font_nsfont(int $font): int
    {
        return NSFont::nsFont($font);
    }
}
