<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** Values for ns_fontdescriptor_with_design / NSFontDescriptorSystemDesign. */
enum FontDesignKind: int
{
    case DEFAULT = 0;
    case SERIF = 1;
    case MONOSPACED = 2;
    case ROUNDED = 3;
}
