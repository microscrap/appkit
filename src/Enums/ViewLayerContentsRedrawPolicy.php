<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSViewLayerContentsRedrawPolicy` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum ViewLayerContentsRedrawPolicy: int
{
    case VIEW_LAYER_CONTENTS_REDRAW_NEVER = 0;
    case VIEW_LAYER_CONTENTS_REDRAW_ON_SET_NEEDS_DISPLAY = 1;
    case VIEW_LAYER_CONTENTS_REDRAW_DURING_VIEW_RESIZE = 2;
    case VIEW_LAYER_CONTENTS_REDRAW_BEFORE_VIEW_RESIZE = 3;
    case VIEW_LAYER_CONTENTS_REDRAW_CROSSFADE = 4;
}
