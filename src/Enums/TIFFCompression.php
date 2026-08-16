<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTIFFCompression` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum TIFFCompression: int
{
    case NONE = 1;
    case CCITTFAX_3 = 3;
    case CCITTFAX_4 = 4;
    case LZW = 5;
    case JPEG = 6;
    case NEXT = 32766;
    case PACK_BITS = 32773;
    case OLD_JPEG = 32865;
}
