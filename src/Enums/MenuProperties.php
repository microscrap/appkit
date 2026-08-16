<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSMenuProperties` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum MenuProperties: int
{
    case MENU_PROPERTY_ITEM_TITLE = 1;
    case MENU_PROPERTY_ITEM_ATTRIBUTED_TITLE = 2;
    case MENU_PROPERTY_ITEM_KEY_EQUIVALENT = 4;
    case MENU_PROPERTY_ITEM_IMAGE = 8;
    case MENU_PROPERTY_ITEM_ENABLED = 16;
    case MENU_PROPERTY_ITEM_ACCESSIBILITY_DESCRIPTION = 32;
}
