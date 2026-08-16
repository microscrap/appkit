<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSOpenGLContextParameter` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum OpenGLContextParameter: int
{
    case SWAP_RECTANGLE = 200;
    case SWAP_RECTANGLE_ENABLE = 201;
    case RASTERIZATION_ENABLE = 221;
    case STATE_VALIDATION = 301;
    case SURFACE_SURFACE_VOLATILE = 306;
}
