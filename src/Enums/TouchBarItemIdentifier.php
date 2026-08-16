<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit system `NSTouchBarItemIdentifier` strings (literal symbol names at runtime). */
enum TouchBarItemIdentifier: string
{
    case FIXED_SPACE_SMALL = 'NSTouchBarItemIdentifierFixedSpaceSmall';
    case FIXED_SPACE_LARGE = 'NSTouchBarItemIdentifierFixedSpaceLarge';
    case FLEXIBLE_SPACE = 'NSTouchBarItemIdentifierFlexibleSpace';
    case OTHER_ITEMS_PROXY = 'NSTouchBarItemIdentifierOtherItemsProxy';
    case CANDIDATE_LIST = 'NSTouchBarItemIdentifierCandidateList';
}
