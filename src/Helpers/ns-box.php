<?php

use AppKit\NS\NSBox\NSBox;

/*
| NSBox helpers — 1:1 over AppKit\NS\NSBox\NSBox
*/

if (! function_exists('ns_box_create')) {
    function ns_box_create(int $x, int $y, int $width, int $height, string $title = ''): int
    {
        return NSBox::create($x, $y, $width, $height, $title);
    }
}

if (! function_exists('ns_box_destroy')) {
    function ns_box_destroy(int $box): void
    {
        NSBox::destroy($box);
    }
}

if (! function_exists('ns_box_set_title')) {
    function ns_box_set_title(int $box, string $title): void
    {
        NSBox::setTitle($box, $title);
    }
}

if (! function_exists('ns_box_add_subview')) {
    function ns_box_add_subview(int $box, int $child): void
    {
        NSBox::addSubview($box, $child);
    }
}
