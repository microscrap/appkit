<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** NSTextBlockValueType — pass to ns_texttable_set_content_width. */
enum TextBlockValueType: int
{
    case ABSOLUTE = 0;
    case PERCENTAGE = 1;
}
