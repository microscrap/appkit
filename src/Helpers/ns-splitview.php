<?php

use AppKit\NS\NSSplitView\NSSplitView;

/*
| NSSplitView helpers — 1:1 over AppKit\NS\NSSplitView\NSSplitView
*/

if (! function_exists('ns_splitview_create')) {
    function ns_splitview_create(int $x, int $y, int $width, int $height, bool $vertical = true): int
    {
        return NSSplitView::create($x, $y, $width, $height, $vertical);
    }
}

if (! function_exists('ns_splitview_destroy')) {
    function ns_splitview_destroy(int $split): void
    {
        NSSplitView::destroy($split);
    }
}

if (! function_exists('ns_splitview_add_subview')) {
    function ns_splitview_add_subview(int $split, int $child): void
    {
        NSSplitView::addSubview($split, $child);
    }
}
