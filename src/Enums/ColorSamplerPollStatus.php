<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** ns_colorsampler_poll status index 0. */
enum ColorSamplerPollStatus: int
{
    case PENDING = 0;
    case SELECTED = 1;
    case CANCELLED = 2;
}
