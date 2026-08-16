<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** NSTokenStyle — pass to ns_tokenfield_set_token_style / ns_tokenfieldcell_set_token_style. */
enum TokenStyle: int
{
    case DEFAULT = 0;
    case NONE = 1;
    case ROUNDED = 2;
    case SQUARED = 3;
    case PLAIN_SQUARED = 4;
}
