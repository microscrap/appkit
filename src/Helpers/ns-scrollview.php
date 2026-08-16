<?php

use AppKit\NS\NSScrollView\NSScrollView;

/*
| NSScrollView helpers — 1:1 over AppKit\NS\NSScrollView\NSScrollView
*/

if (! function_exists('ns_scrollview_create')) {
    function ns_scrollview_create(int $x, int $y, int $width, int $height): int
    {
        return NSScrollView::create($x, $y, $width, $height);
    }
}

if (! function_exists('ns_scrollview_destroy')) {
    function ns_scrollview_destroy(int $scroll): void
    {
        NSScrollView::destroy($scroll);
    }
}

if (! function_exists('ns_scrollview_set_document_view')) {
    function ns_scrollview_set_document_view(int $scroll, int $child): void
    {
        NSScrollView::setDocumentView($scroll, $child);
    }
}
