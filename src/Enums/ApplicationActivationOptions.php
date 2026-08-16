<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSApplicationActivationOptions` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum ApplicationActivationOptions: int
{
    case APPLICATION_ACTIVATE_ALL_WINDOWS = 1;
    case APPLICATION_ACTIVATE_IGNORING_OTHER_APPS = 2;
}
