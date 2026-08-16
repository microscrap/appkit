<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSDraggingItemEnumerationOptions` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum DraggingItemEnumerationOptions: int
{
    case DRAGGING_ITEM_ENUMERATION_CONCURRENT = 0;
    case DRAGGING_ITEM_ENUMERATION_CLEAR_NONENUMERATED_IMAGES = 1;
}
