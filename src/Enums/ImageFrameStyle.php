<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSImageFrameStyle` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum ImageFrameStyle: int
{
    case IMAGE_FRAME_NONE = 0;
    case IMAGE_FRAME_PHOTO = 1;
    case IMAGE_FRAME_GRAY_BEZEL = 2;
    case IMAGE_FRAME_GROOVE = 3;
    case IMAGE_FRAME_BUTTON = 4;
}
