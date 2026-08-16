<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSFontRenderingMode` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum FontRenderingMode: int
{
    case FONT_DEFAULT_RENDERING_MODE = 0;
    case FONT_ANTIALIASED_RENDERING_MODE = 1;
    case FONT_INTEGER_ADVANCEMENTS_RENDERING_MODE = 2;
    case FONT_ANTIALIASED_INTEGER_ADVANCEMENTS_RENDERING_MODE = 3;
}
