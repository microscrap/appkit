<?php

namespace Microscrap\Bindings\AppKit\Enums;

/**
 * NSImageCacheMode — pass the int value to ns_image_set_cache_mode.
 */
enum ImageCacheMode: int
{
    case DEFAULT = 0;
    case ALWAYS = 1;
    case BY_SIZE = 2;
    case NEVER = 3;
}
