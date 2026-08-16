<?php

use AppKit\NS\NSFontManager\NSFontManager;
use Microscrap\Bindings\AppKit\Enums\FontTraitMask;

/*
| NSFontManager helpers — 1:1 over AppKit\NS\NSFontManager\NSFontManager
*/

if (! function_exists('ns_fontmanager_shared')) {
    function ns_fontmanager_shared(): int
    {
        return NSFontManager::shared();
    }
}

if (! function_exists('ns_fontmanager_destroy')) {
    function ns_fontmanager_destroy(int $manager): void
    {
        NSFontManager::destroy($manager);
    }
}

if (! function_exists('ns_fontmanager_is_multiple')) {
    function ns_fontmanager_is_multiple(int $manager): bool
    {
        return NSFontManager::isMultiple($manager);
    }
}

if (! function_exists('ns_fontmanager_selected_font')) {
    function ns_fontmanager_selected_font(int $manager): int
    {
        return NSFontManager::selectedFont($manager);
    }
}

if (! function_exists('ns_fontmanager_set_selected_font')) {
    function ns_fontmanager_set_selected_font(int $manager, int $font, bool $isMultiple = false): void
    {
        NSFontManager::setSelectedFont($manager, $font, $isMultiple);
    }
}

if (! function_exists('ns_fontmanager_font_with_family')) {
    function ns_fontmanager_font_with_family(
        int $manager,
        string $family,
        FontTraitMask|int $traits,
        int $weight,
        float $size,
    ): int {
        return NSFontManager::fontWithFamily(
            $manager,
            $family,
            $traits instanceof FontTraitMask ? $traits->value : $traits,
            $weight,
            $size,
        );
    }
}

if (! function_exists('ns_fontmanager_traits_of_font')) {
    function ns_fontmanager_traits_of_font(int $manager, int $font): int
    {
        return NSFontManager::traitsOfFont($manager, $font);
    }
}

if (! function_exists('ns_fontmanager_weight_of_font')) {
    function ns_fontmanager_weight_of_font(int $manager, int $font): int
    {
        return NSFontManager::weightOfFont($manager, $font);
    }
}

if (! function_exists('ns_fontmanager_available_fonts_count')) {
    function ns_fontmanager_available_fonts_count(int $manager): int
    {
        return NSFontManager::availableFontsCount($manager);
    }
}

if (! function_exists('ns_fontmanager_available_font_at')) {
    function ns_fontmanager_available_font_at(int $manager, int $index): string
    {
        return NSFontManager::availableFontAt($manager, $index);
    }
}

if (! function_exists('ns_fontmanager_available_font_families_count')) {
    function ns_fontmanager_available_font_families_count(int $manager): int
    {
        return NSFontManager::availableFontFamiliesCount($manager);
    }
}

if (! function_exists('ns_fontmanager_available_font_family_at')) {
    function ns_fontmanager_available_font_family_at(int $manager, int $index): string
    {
        return NSFontManager::availableFontFamilyAt($manager, $index);
    }
}

if (! function_exists('ns_fontmanager_convert_font')) {
    function ns_fontmanager_convert_font(int $manager, int $font): int
    {
        return NSFontManager::convertFont($manager, $font);
    }
}

if (! function_exists('ns_fontmanager_convert_font_to_size')) {
    function ns_fontmanager_convert_font_to_size(int $manager, int $font, float $size): int
    {
        return NSFontManager::convertFontToSize($manager, $font, $size);
    }
}

if (! function_exists('ns_fontmanager_convert_font_to_face')) {
    function ns_fontmanager_convert_font_to_face(int $manager, int $font, string $face): int
    {
        return NSFontManager::convertFontToFace($manager, $font, $face);
    }
}

if (! function_exists('ns_fontmanager_convert_font_to_family')) {
    function ns_fontmanager_convert_font_to_family(int $manager, int $font, string $family): int
    {
        return NSFontManager::convertFontToFamily($manager, $font, $family);
    }
}

if (! function_exists('ns_fontmanager_convert_font_to_have_trait')) {
    function ns_fontmanager_convert_font_to_have_trait(int $manager, int $font, FontTraitMask|int $trait): int
    {
        return NSFontManager::convertFontToHaveTrait(
            $manager,
            $font,
            $trait instanceof FontTraitMask ? $trait->value : $trait,
        );
    }
}

if (! function_exists('ns_fontmanager_convert_font_to_not_have_trait')) {
    function ns_fontmanager_convert_font_to_not_have_trait(int $manager, int $font, FontTraitMask|int $trait): int
    {
        return NSFontManager::convertFontToNotHaveTrait(
            $manager,
            $font,
            $trait instanceof FontTraitMask ? $trait->value : $trait,
        );
    }
}

if (! function_exists('ns_fontmanager_convert_weight')) {
    function ns_fontmanager_convert_weight(int $manager, int $font, bool $up): int
    {
        return NSFontManager::convertWeight($manager, $font, $up);
    }
}

if (! function_exists('ns_fontmanager_is_enabled')) {
    function ns_fontmanager_is_enabled(int $manager): bool
    {
        return NSFontManager::isEnabled($manager);
    }
}

if (! function_exists('ns_fontmanager_set_enabled')) {
    function ns_fontmanager_set_enabled(int $manager, bool $enabled): void
    {
        NSFontManager::setEnabled($manager, $enabled);
    }
}

if (! function_exists('ns_fontmanager_current_font_action')) {
    function ns_fontmanager_current_font_action(int $manager): int
    {
        return NSFontManager::currentFontAction($manager);
    }
}

if (! function_exists('ns_fontmanager_font_panel')) {
    function ns_fontmanager_font_panel(int $manager, bool $create = true): int
    {
        return NSFontManager::fontPanel($manager, $create);
    }
}

if (! function_exists('ns_fontmanager_order_front_font_panel')) {
    function ns_fontmanager_order_front_font_panel(int $manager): void
    {
        NSFontManager::orderFrontFontPanel($manager);
    }
}

if (! function_exists('ns_fontmanager_font_named_has_traits')) {
    function ns_fontmanager_font_named_has_traits(int $manager, string $name, FontTraitMask|int $traits): bool
    {
        return NSFontManager::fontNamedHasTraits(
            $manager,
            $name,
            $traits instanceof FontTraitMask ? $traits->value : $traits,
        );
    }
}

if (! function_exists('ns_fontmanager_available_font_names_with_traits_count')) {
    function ns_fontmanager_available_font_names_with_traits_count(int $manager, FontTraitMask|int $traits): int
    {
        return NSFontManager::availableFontNamesWithTraitsCount(
            $manager,
            $traits instanceof FontTraitMask ? $traits->value : $traits,
        );
    }
}

if (! function_exists('ns_fontmanager_available_font_name_with_traits_at')) {
    function ns_fontmanager_available_font_name_with_traits_at(int $manager, FontTraitMask|int $traits, int $index): string
    {
        return NSFontManager::availableFontNameWithTraitsAt(
            $manager,
            $traits instanceof FontTraitMask ? $traits->value : $traits,
            $index,
        );
    }
}

if (! function_exists('ns_fontmanager_localized_name_for_family')) {
    function ns_fontmanager_localized_name_for_family(int $manager, string $family, string $face = ''): string
    {
        return NSFontManager::localizedNameForFamily($manager, $family, $face);
    }
}

if (! function_exists('ns_fontmanager_nsfontmanager')) {
    function ns_fontmanager_nsfontmanager(int $manager): int
    {
        return NSFontManager::nsFontManager($manager);
    }
}
