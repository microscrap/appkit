<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSCollectionViewScrollDirection` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum CollectionViewScrollDirection: int
{
    case VERTICAL = 0;
    case HORIZONTAL = 1;
}
