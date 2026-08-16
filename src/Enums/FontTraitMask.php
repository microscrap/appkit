<?php

namespace Microscrap\Bindings\AppKit\Enums;

/**
 * NSFontTraitMask bit flags for NSFontManager convert / fontWithFamily.
 * OR cases together as ints when combining.
 */
enum FontTraitMask: int
{
    case ITALIC = 0x00000001;
    case BOLD = 0x00000002;
    case UNBOLD = 0x00000004;
    case NON_STANDARD_CHARACTER_SET = 0x00000008;
    case NARROW = 0x00000010;
    case EXPANDED = 0x00000020;
    case CONDENSED = 0x00000040;
    case SMALL_CAPS = 0x00000080;
    case POSTER = 0x00000100;
    case COMPRESSED = 0x00000200;
    case FIXED_PITCH = 0x00000400;
    case UNITALIC = 0x01000000;
}
