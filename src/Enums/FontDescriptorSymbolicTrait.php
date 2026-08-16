<?php

namespace Microscrap\Bindings\AppKit\Enums;

/**
 * NSFontDescriptorSymbolicTraits bit flags.
 * OR cases together as ints when combining.
 */
enum FontDescriptorSymbolicTrait: int
{
    case ITALIC = 1;
    case BOLD = 2;
    case EXPANDED = 32;
    case CONDENSED = 64;
    case MONO_SPACE = 1024;
    case VERTICAL = 2048;
    case UI_OPTIMIZED = 4096;
    case TIGHT_LEADING = 32768;
    case LOOSE_LEADING = 65536;
    case CLASS_MASK = 0xF0000000;
}
