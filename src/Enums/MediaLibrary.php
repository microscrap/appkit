<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSMediaLibrary` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum MediaLibrary: int
{
    case AUDIO = 0;
    case IMAGE = 1;
    case MOVIE = 2;
}
