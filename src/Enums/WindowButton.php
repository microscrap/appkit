<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSWindowButton` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum WindowButton: int
{
    case WINDOW_CLOSE_BUTTON = 0;
    case WINDOW_MINIATURIZE_BUTTON = 1;
    case WINDOW_ZOOM_BUTTON = 2;
    case WINDOW_TOOLBAR_BUTTON = 3;
    case WINDOW_DOCUMENT_ICON_BUTTON = 4;
    case WINDOW_DOCUMENT_VERSIONS_BUTTON = 6;
}
