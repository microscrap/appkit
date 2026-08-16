<?php

use AppKit\NS\NSStackView\NSStackView;

/*
| NSStackView helpers — 1:1 over AppKit\NS\NSStackView\NSStackView
*/

if (! function_exists('ns_stackview_create')) {
    function ns_stackview_create(int $x, int $y, int $width, int $height, bool $vertical = true): int
    {
        return NSStackView::create($x, $y, $width, $height, $vertical);
    }
}

if (! function_exists('ns_stackview_destroy')) {
    function ns_stackview_destroy(int $stack): void
    {
        NSStackView::destroy($stack);
    }
}

if (! function_exists('ns_stackview_set_spacing')) {
    function ns_stackview_set_spacing(int $stack, float $spacing): void
    {
        NSStackView::setSpacing($stack, $spacing);
    }
}

if (! function_exists('ns_stackview_add_arranged_subview')) {
    function ns_stackview_add_arranged_subview(int $stack, int $child): void
    {
        NSStackView::addArrangedSubview($stack, $child);
    }
}
