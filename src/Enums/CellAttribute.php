<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSCellAttribute` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum CellAttribute: int
{
    case CELL_DISABLED = 0;
    case CELL_STATE = 1;
    case PUSH_IN_CELL = 2;
    case CELL_EDITABLE = 3;
    case CHANGE_GRAY_CELL = 4;
    case CELL_HIGHLIGHTED = 5;
    case CELL_LIGHTS_BY_CONTENTS = 6;
    case CELL_LIGHTS_BY_GRAY = 7;
    case CHANGE_BACKGROUND_CELL = 8;
    case CELL_LIGHTS_BY_BACKGROUND = 9;
    case CELL_IS_BORDERED = 10;
    case CELL_HAS_OVERLAPPING_IMAGE = 11;
    case CELL_HAS_IMAGE_HORIZONTAL = 12;
    case CELL_HAS_IMAGE_ON_LEFT_OR_BOTTOM = 13;
    case CELL_CHANGES_CONTENTS = 14;
    case CELL_IS_INSET_BUTTON = 15;
    case CELL_ALLOWS_MIXED_STATE = 16;
}
