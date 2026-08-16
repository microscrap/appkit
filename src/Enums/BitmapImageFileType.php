<?php

namespace Microscrap\Bindings\AppKit\Enums;

/**
 * NSBitmapImageFileType — pass the int value to ns_bitmapimagerep_representation_using_type.
 */
enum BitmapImageFileType: int
{
    case TIFF = 0;
    case BMP = 1;
    case GIF = 2;
    case JPEG = 3;
    case PNG = 4;
    case JPEG2000 = 5;
}
