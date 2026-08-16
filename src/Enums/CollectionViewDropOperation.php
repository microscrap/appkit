<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSCollectionViewDropOperation` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum CollectionViewDropOperation: int
{
    case COLLECTION_VIEW_DROP_ON = 0;
    case COLLECTION_VIEW_DROP_BEFORE = 1;
}
