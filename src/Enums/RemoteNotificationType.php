<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSRemoteNotificationType` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum RemoteNotificationType: int
{
    case NONE = 0;
    case BADGE = 1;
    case SOUND = 2;
    case ALERT = 4;
}
