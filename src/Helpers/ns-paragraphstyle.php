<?php

use AppKit\NS\NSParagraphStyle\NSParagraphStyle;
use Microscrap\Bindings\AppKit\Enums\TextAlignment;

/*
| NSParagraphStyle helpers — 1:1 over AppKit\NS\NSParagraphStyle\NSParagraphStyle
*/

if (! function_exists('ns_paragraphstyle_default')) {
    function ns_paragraphstyle_default(): int
    {
        return NSParagraphStyle::defaultParagraphStyle();
    }
}

if (! function_exists('ns_paragraphstyle_create')) {
    function ns_paragraphstyle_create(): int
    {
        return NSParagraphStyle::create();
    }
}

if (! function_exists('ns_paragraphstyle_wrap')) {
    function ns_paragraphstyle_wrap(int $nsParagraphStylePtr): int
    {
        return NSParagraphStyle::wrap($nsParagraphStylePtr);
    }
}

if (! function_exists('ns_paragraphstyle_destroy')) {
    function ns_paragraphstyle_destroy(int $style): void
    {
        NSParagraphStyle::destroy($style);
    }
}

if (! function_exists('ns_paragraphstyle_line_spacing')) {
    function ns_paragraphstyle_line_spacing(int $style): float
    {
        return NSParagraphStyle::getLineSpacing($style);
    }
}

if (! function_exists('ns_paragraphstyle_set_line_spacing')) {
    function ns_paragraphstyle_set_line_spacing(int $style, float $value): void
    {
        NSParagraphStyle::setLineSpacing($style, $value);
    }
}

if (! function_exists('ns_paragraphstyle_line_break_mode')) {
    function ns_paragraphstyle_line_break_mode(int $style): int
    {
        return NSParagraphStyle::getLineBreakMode($style);
    }
}

if (! function_exists('ns_paragraphstyle_set_line_break_mode')) {
    function ns_paragraphstyle_set_line_break_mode(int $style, int $mode): void
    {
        NSParagraphStyle::setLineBreakMode($style, $mode);
    }
}

if (! function_exists('ns_paragraphstyle_alignment')) {
    function ns_paragraphstyle_alignment(int $style): int
    {
        return NSParagraphStyle::getAlignment($style);
    }
}

if (! function_exists('ns_paragraphstyle_set_alignment')) {
    function ns_paragraphstyle_set_alignment(int $style, TextAlignment|int $alignment): void
    {
        NSParagraphStyle::setAlignment(
            $style,
            $alignment instanceof TextAlignment ? $alignment->value : $alignment
        );
    }
}

if (! function_exists('ns_paragraphstyle_set_paragraph_style')) {
    function ns_paragraphstyle_set_paragraph_style(int $style, int $sourceStyle): void
    {
        NSParagraphStyle::setParagraphStyle($style, $sourceStyle);
    }
}

if (! function_exists('ns_paragraphstyle_set_head_indent')) {
    function ns_paragraphstyle_set_head_indent(int $style, float $value): void
    {
        NSParagraphStyle::setHeadIndent($style, $value);
    }
}

if (! function_exists('ns_paragraphstyle_head_indent')) {
    function ns_paragraphstyle_head_indent(int $style): float
    {
        return NSParagraphStyle::getHeadIndent($style);
    }
}

if (! function_exists('ns_paragraphstyle_set_hyphenation_factor')) {
    function ns_paragraphstyle_set_hyphenation_factor(int $style, float $value): void
    {
        NSParagraphStyle::setHyphenationFactor($style, $value);
    }
}

if (! function_exists('ns_paragraphstyle_hyphenation_factor')) {
    function ns_paragraphstyle_hyphenation_factor(int $style): float
    {
        return NSParagraphStyle::getHyphenationFactor($style);
    }
}
