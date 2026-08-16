<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSCollectionLayoutSectionOrthogonalScrollingBehavior` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum CollectionLayoutSectionOrthogonalScrollingBehavior: int
{
    case NONE = 0;
    case CONTINUOUS = 1;
    case CONTINUOUS_GROUP_LEADING_BOUNDARY = 2;
    case PAGING = 3;
    case GROUP_PAGING = 4;
    case GROUP_PAGING_CENTERED = 5;
}
