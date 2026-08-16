<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSSpringLoadingOptions` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum SpringLoadingOptions: int
{
    case SPRING_LOADING_DISABLED = 0;
    case SPRING_LOADING_ENABLED = 1;
    case SPRING_LOADING_CONTINUOUS_ACTIVATION = 2;
    case SPRING_LOADING_NO_HOVER = 3;
}
