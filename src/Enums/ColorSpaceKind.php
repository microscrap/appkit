<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** Values for ns_colorspace_standard / NSColorSpace::standard. */
enum ColorSpaceKind: int
{
    case SRGB = 0;
    case GENERIC_GAMMA22_GRAY = 1;
    case EXTENDED_SRGB = 2;
    case EXTENDED_GENERIC_GAMMA22_GRAY = 3;
    case DISPLAY_P3 = 4;
    case ADOBE_RGB1998 = 5;
    case GENERIC_RGB = 6;
    case GENERIC_GRAY = 7;
    case GENERIC_CMYK = 8;
    case DEVICE_RGB = 9;
    case DEVICE_GRAY = 10;
    case DEVICE_CMYK = 11;
}
