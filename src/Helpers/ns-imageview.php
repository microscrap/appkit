<?php

use AppKit\NS\NSImageView\NSImageView;

/*
| NSImageView helpers — 1:1 over AppKit\NS\NSImageView\NSImageView
*/

if (! function_exists('ns_imageview_create')) {
    function ns_imageview_create(int $x, int $y, int $width, int $height): int
    {
        return NSImageView::create($x, $y, $width, $height);
    }
}

if (! function_exists('ns_imageview_destroy')) {
    function ns_imageview_destroy(int $view): void
    {
        NSImageView::destroy($view);
    }
}

if (! function_exists('ns_imageview_set_path')) {
    function ns_imageview_set_path(int $view, string $path): bool
    {
        return NSImageView::setPath($view, $path);
    }
}
