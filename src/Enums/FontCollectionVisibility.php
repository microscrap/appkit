<?php

namespace Microscrap\Bindings\AppKit\Enums;

/**
 * NSFontCollectionVisibility bit flags.
 * OR cases together as ints when combining.
 */
enum FontCollectionVisibility: int
{
    case PROCESS = 1;
    case USER = 2;
    case COMPUTER = 4;
}
