<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSGlyphInscription` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum GlyphInscription: int
{
    case GLYPH_INSCRIBE_BASE = 0;
    case GLYPH_INSCRIBE_BELOW = 1;
    case GLYPH_INSCRIBE_ABOVE = 2;
    case GLYPH_INSCRIBE_OVERSTRIKE = 3;
    case GLYPH_INSCRIBE_OVER_BELOW = 4;
}
