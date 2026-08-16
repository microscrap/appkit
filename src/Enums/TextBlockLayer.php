<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTextBlockLayer` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum TextBlockLayer: int
{
    case TEXT_BLOCK_PADDING = -1;
    case TEXT_BLOCK_BORDER = 0;
    case TEXT_BLOCK_MARGIN = 1;
}
