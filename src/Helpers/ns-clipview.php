<?php

use AppKit\NS\NSClipView\NSClipView;

/*
| NSClipView helpers — 1:1 over AppKit\NS\NSClipView\NSClipView
*/

if (! function_exists('ns_clipview_create')) {
    function ns_clipview_create(int $x, int $y, int $width, int $height): int
    {
        return NSClipView::create($x, $y, $width, $height);
    }
}

if (! function_exists('ns_clipview_wrap')) {
    function ns_clipview_wrap(int $nsClipViewPtr): int
    {
        return NSClipView::wrap($nsClipViewPtr);
    }
}

if (! function_exists('ns_clipview_destroy')) {
    function ns_clipview_destroy(int $clip): void
    {
        NSClipView::destroy($clip);
    }
}

if (! function_exists('ns_clipview_nsclipview')) {
    function ns_clipview_nsclipview(int $clip): int
    {
        return NSClipView::nsClipView($clip);
    }
}

if (! function_exists('ns_clipview_set_document_view')) {
    function ns_clipview_set_document_view(int $clip, int $child): void
    {
        NSClipView::setDocumentView($clip, $child);
    }
}

if (! function_exists('ns_clipview_document_view')) {
    function ns_clipview_document_view(int $clip): int
    {
        return NSClipView::documentView($clip);
    }
}

if (! function_exists('ns_clipview_set_draws_background')) {
    function ns_clipview_set_draws_background(int $clip, bool $flag): void
    {
        NSClipView::setDrawsBackground($clip, $flag);
    }
}

if (! function_exists('ns_clipview_draws_background')) {
    function ns_clipview_draws_background(int $clip): bool
    {
        return NSClipView::drawsBackground($clip);
    }
}

if (! function_exists('ns_clipview_scroll_to_point')) {
    function ns_clipview_scroll_to_point(int $clip, float $x, float $y): void
    {
        NSClipView::scrollToPoint($clip, $x, $y);
    }
}

if (! function_exists('ns_clipview_set_content_insets')) {
    function ns_clipview_set_content_insets(int $clip, float $top, float $left, float $bottom, float $right): void
    {
        NSClipView::setContentInsets($clip, $top, $left, $bottom, $right);
    }
}

if (! function_exists('ns_clipview_set_automatically_adjusts_content_insets')) {
    function ns_clipview_set_automatically_adjusts_content_insets(int $clip, bool $flag): void
    {
        NSClipView::setAutomaticallyAdjustsContentInsets($clip, $flag);
    }
}

if (! function_exists('ns_clipview_automatically_adjusts_content_insets')) {
    function ns_clipview_automatically_adjusts_content_insets(int $clip): bool
    {
        return NSClipView::automaticallyAdjustsContentInsets($clip);
    }
}

if (! function_exists('ns_clipview_document_visible_rect')) {
    function ns_clipview_document_visible_rect(int $clip): array
    {
        return NSClipView::documentVisibleRect($clip);
    }
}
