<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** NSTextTableLayoutAlgorithm — pass to ns_texttable_set_layout_algorithm. */
enum TextTableLayoutAlgorithm: int
{
    case AUTOMATIC = 0;
    case FIXED = 1;
}
