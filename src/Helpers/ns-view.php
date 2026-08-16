<?php

use AppKit\NS\NSView\NSView;

/*
| NSView helpers — 1:1 over AppKit\NS\NSView\NSView
*/

if (! function_exists('ns_view_create')) {
    function ns_view_create(int $x, int $y, int $width, int $height): int
    {
        return NSView::create($x, $y, $width, $height);
    }
}

if (! function_exists('ns_view_wrap')) {
    function ns_view_wrap(int $nsViewPtr): int
    {
        return NSView::wrap($nsViewPtr);
    }
}

if (! function_exists('ns_view_destroy')) {
    function ns_view_destroy(int $view): void
    {
        NSView::destroy($view);
    }
}

if (! function_exists('ns_view_add_subview')) {
    function ns_view_add_subview(int $parent, int $child): void
    {
        NSView::addSubview($parent, $child);
    }
}

if (! function_exists('ns_view_set_frame')) {
    function ns_view_set_frame(int $view, int $x, int $y, int $width, int $height): void
    {
        NSView::setFrame($view, $x, $y, $width, $height);
    }
}

if (! function_exists('ns_view_get_width')) {
    function ns_view_get_width(int $view): int
    {
        return NSView::getWidth($view);
    }
}

if (! function_exists('ns_view_get_height')) {
    function ns_view_get_height(int $view): int
    {
        return NSView::getHeight($view);
    }
}

if (! function_exists('ns_view_nsview')) {
    function ns_view_nsview(int $view): int
    {
        return NSView::nsView($view);
    }
}
