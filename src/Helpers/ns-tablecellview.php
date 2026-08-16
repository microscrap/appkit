<?php

use AppKit\NS\NSTableCellView\NSTableCellView;

/*
| NSTableCellView helpers — 1:1 over AppKit\NS\NSTableCellView\NSTableCellView
*/

if (! function_exists('ns_tablecellview_create')) {
    function ns_tablecellview_create(int $x, int $y, int $width, int $height): int
    {
        return NSTableCellView::create($x, $y, $width, $height);
    }
}

if (! function_exists('ns_tablecellview_wrap')) {
    function ns_tablecellview_wrap(int $nsTableCellViewPtr): int
    {
        return NSTableCellView::wrap($nsTableCellViewPtr);
    }
}

if (! function_exists('ns_tablecellview_destroy')) {
    function ns_tablecellview_destroy(int $cell): void
    {
        NSTableCellView::destroy($cell);
    }
}

if (! function_exists('ns_tablecellview_set_text')) {
    function ns_tablecellview_set_text(int $cell, string $text): void
    {
        NSTableCellView::setText($cell, $text);
    }
}

if (! function_exists('ns_tablecellview_get_text')) {
    function ns_tablecellview_get_text(int $cell): string
    {
        return NSTableCellView::getText($cell);
    }
}

if (! function_exists('ns_tablecellview_set_image')) {
    function ns_tablecellview_set_image(int $cell, int $image): void
    {
        NSTableCellView::setImage($cell, $image);
    }
}

if (! function_exists('ns_tablecellview_text_field')) {
    function ns_tablecellview_text_field(int $cell): int
    {
        return NSTableCellView::textField($cell);
    }
}

if (! function_exists('ns_tablecellview_image_view')) {
    function ns_tablecellview_image_view(int $cell): int
    {
        return NSTableCellView::imageView($cell);
    }
}
