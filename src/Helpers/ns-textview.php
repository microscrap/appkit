<?php

use AppKit\NS\NSTextView\NSTextView;

/*
| NSTextView helpers — 1:1 over AppKit\NS\NSTextView\NSTextView
*/

if (! function_exists('ns_textview_create')) {
    function ns_textview_create(int $x, int $y, int $width, int $height, string $value = ''): int
    {
        return NSTextView::create($x, $y, $width, $height, $value);
    }
}

if (! function_exists('ns_textview_destroy')) {
    function ns_textview_destroy(int $view): void
    {
        NSTextView::destroy($view);
    }
}

if (! function_exists('ns_textview_set_string')) {
    function ns_textview_set_string(int $view, string $value): void
    {
        NSTextView::setString($view, $value);
    }
}

if (! function_exists('ns_textview_get_string')) {
    function ns_textview_get_string(int $view): string
    {
        return NSTextView::getString($view);
    }
}

if (! function_exists('ns_textview_poll_change')) {
    function ns_textview_poll_change(int $view): bool
    {
        return NSTextView::pollChange($view);
    }
}
