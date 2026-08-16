<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** NSColorType from ns_color_type / NSColor::type. */
enum ColorType: int
{
    case COMPONENT_BASED = 0;
    case PATTERN = 1;
    case CATALOG = 2;
}
