<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTextBlockDimension` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum TextBlockDimension: int
{
    case TEXT_BLOCK_WIDTH = 0;
    case TEXT_BLOCK_MINIMUM_WIDTH = 1;
    case TEXT_BLOCK_MAXIMUM_WIDTH = 2;
    case TEXT_BLOCK_HEIGHT = 4;
    case TEXT_BLOCK_MINIMUM_HEIGHT = 5;
    case TEXT_BLOCK_MAXIMUM_HEIGHT = 6;
}
