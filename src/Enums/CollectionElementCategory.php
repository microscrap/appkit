<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSCollectionElementCategory` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum CollectionElementCategory: int
{
    case ITEM = 0;
    case SUPPLEMENTARY_VIEW = 1;
    case DECORATION_VIEW = 2;
    case INTER_ITEM_GAP = 3;
}
