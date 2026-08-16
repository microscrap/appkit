<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTableViewAnimationOptions` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum TableViewAnimationOptions: int
{
    case TABLE_VIEW_ANIMATION_EFFECT_NONE = 0;
    case TABLE_VIEW_ANIMATION_EFFECT_FADE = 1;
    case TABLE_VIEW_ANIMATION_EFFECT_GAP = 2;
    case TABLE_VIEW_ANIMATION_SLIDE_UP = 3;
    case TABLE_VIEW_ANIMATION_SLIDE_DOWN = 4;
    case TABLE_VIEW_ANIMATION_SLIDE_LEFT = 5;
    case TABLE_VIEW_ANIMATION_SLIDE_RIGHT = 6;
}
