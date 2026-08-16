<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** NSLineBreakMode — pass to ns_textcontainer_set_line_break_mode. */
enum TextContainerLineBreakMode: int
{
    case BY_WORD_WRAPPING = 0;
    case CHAR_WRAPPING = 1;
    case CLIPPING = 2;
    case TRUNCATING_HEAD = 3;
    case TRUNCATING_TAIL = 4;
    case TRUNCATING_MIDDLE = 5;
}
