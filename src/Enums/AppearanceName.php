<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** Common NSAppearanceName strings for ns_appearance_named / ns_appearance_create. */
enum AppearanceName: string
{
    case AQUA = 'NSAppearanceNameAqua';
    case DARK_AQUA = 'NSAppearanceNameDarkAqua';
    case VIBRANT_DARK = 'NSAppearanceNameVibrantDark';
    case VIBRANT_LIGHT = 'NSAppearanceNameVibrantLight';
    case ACCESSIBILITY_HIGH_CONTRAST_AQUA = 'NSAppearanceNameAccessibilityHighContrastAqua';
    case ACCESSIBILITY_HIGH_CONTRAST_DARK_AQUA = 'NSAppearanceNameAccessibilityHighContrastDarkAqua';
    case ACCESSIBILITY_HIGH_CONTRAST_VIBRANT_LIGHT = 'NSAppearanceNameAccessibilityHighContrastVibrantLight';
    case ACCESSIBILITY_HIGH_CONTRAST_VIBRANT_DARK = 'NSAppearanceNameAccessibilityHighContrastVibrantDark';
}
