<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSCollectionViewItemHighlightState` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum CollectionViewItemHighlightState: int
{
    case COLLECTION_VIEW_ITEM_HIGHLIGHT_NONE = 0;
    case COLLECTION_VIEW_ITEM_HIGHLIGHT_FOR_SELECTION = 1;
    case COLLECTION_VIEW_ITEM_HIGHLIGHT_FOR_DESELECTION = 2;
    case COLLECTION_VIEW_ITEM_HIGHLIGHT_AS_DROP_TARGET = 3;
}
