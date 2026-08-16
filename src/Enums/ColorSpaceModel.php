<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** NSColorSpaceModel — pass to ns_colorspace_available_count / available_at. */
enum ColorSpaceModel: int
{
    case UNKNOWN = -1;
    case GRAY = 0;
    case RGB = 1;
    case CMYK = 2;
    case LAB = 3;
    case DEVICE_N = 4;
    case INDEXED = 5;
    case PATTERNED = 6;
}
