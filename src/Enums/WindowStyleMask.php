<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSWindowStyleMask` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum WindowStyleMask: int
{
    case BORDERLESS = 0;
    case TITLED = 1;
    case CLOSABLE = 2;
    case MINIATURIZABLE = 4;
    case RESIZABLE = 8;
    case TEXTURED_BACKGROUND = 256;
    case UNIFIED_TITLE_AND_TOOLBAR = 4096;
    case FULL_SCREEN = 16384;
    case FULL_SIZE_CONTENT_VIEW = 32768;
    case UTILITY_WINDOW = 16;
    case DOC_MODAL_WINDOW = 64;
    case NONACTIVATING_PANEL = 128;
    case HUD_WINDOW = 8192;
}
