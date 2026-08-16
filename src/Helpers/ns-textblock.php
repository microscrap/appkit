<?php

use AppKit\NS\NSTextBlock\NSTextBlock;

/*
| NSTextBlock helpers — 1:1 over AppKit\NS\NSTextBlock\NSTextBlock
*/

if (! function_exists('ns_textblock_create')) {
    function ns_textblock_create(): int
    {
        return NSTextBlock::create();
    }
}

if (! function_exists('ns_textblock_wrap')) {
    function ns_textblock_wrap(int $nsTextBlockPtr): int
    {
        return NSTextBlock::wrap($nsTextBlockPtr);
    }
}

if (! function_exists('ns_textblock_destroy')) {
    function ns_textblock_destroy(int $block): void
    {
        NSTextBlock::destroy($block);
    }
}

if (! function_exists('ns_textblock_set_content_width')) {
    function ns_textblock_set_content_width(int $block, float $width, int $valueType): void
    {
        NSTextBlock::setContentWidth($block, $width, $valueType);
    }
}

if (! function_exists('ns_textblock_content_width')) {
    function ns_textblock_content_width(int $block): float
    {
        return NSTextBlock::getContentWidth($block);
    }
}

if (! function_exists('ns_textblock_set_vertical_alignment')) {
    function ns_textblock_set_vertical_alignment(int $block, int $alignment): void
    {
        NSTextBlock::setVerticalAlignment($block, $alignment);
    }
}

if (! function_exists('ns_textblock_get_vertical_alignment')) {
    function ns_textblock_get_vertical_alignment(int $block): int
    {
        return NSTextBlock::getVerticalAlignment($block);
    }
}

if (! function_exists('ns_textblock_set_background_color')) {
    function ns_textblock_set_background_color(int $block, int $colorHandle): void
    {
        NSTextBlock::setBackgroundColor($block, $colorHandle);
    }
}

if (! function_exists('ns_textblock_set_value')) {
    function ns_textblock_set_value(int $block, float $val, int $valueType, int $dimension): void
    {
        NSTextBlock::setValue($block, $val, $valueType, $dimension);
    }
}

if (! function_exists('ns_textblock_value_for_dimension')) {
    function ns_textblock_value_for_dimension(int $block, int $dimension): float
    {
        return NSTextBlock::getValue($block, $dimension);
    }
}

if (! function_exists('ns_textblock_set_width')) {
    function ns_textblock_set_width(int $block, float $val, int $valueType, int $layer, int $edge = -1): void
    {
        NSTextBlock::setLayerWidth($block, $val, $valueType, $layer, $edge);
    }
}
