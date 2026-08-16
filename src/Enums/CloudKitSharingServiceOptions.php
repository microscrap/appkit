<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSCloudKitSharingServiceOptions` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum CloudKitSharingServiceOptions: int
{
    case CLOUD_KIT_SHARING_SERVICE_STANDARD = 0;
    case CLOUD_KIT_SHARING_SERVICE_ALLOW_PUBLIC = 1;
    case CLOUD_KIT_SHARING_SERVICE_ALLOW_PRIVATE = 2;
    case CLOUD_KIT_SHARING_SERVICE_ALLOW_READ_ONLY = 16;
    case CLOUD_KIT_SHARING_SERVICE_ALLOW_READ_WRITE = 32;
}
