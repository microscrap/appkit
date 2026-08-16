<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSCollectionUpdateAction` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum CollectionUpdateAction: int
{
    case INSERT = 0;
    case DELETE = 1;
    case RELOAD = 2;
    case MOVE = 3;
    case NONE = 4;
}
