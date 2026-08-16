<?php

use AppKit\NS\NSText\NSText;

/*
| NSText helpers — 1:1 over AppKit\NS\NSText\NSText
*/

if (! function_exists('ns_text_create')) {
    function ns_text_create(int $x, int $y, int $width, int $height, string $value = ''): int
    {
        return NSText::create($x, $y, $width, $height, $value);
    }
}

if (! function_exists('ns_text_wrap')) {
    function ns_text_wrap(int $nsTextPtr): int
    {
        return NSText::wrap($nsTextPtr);
    }
}

if (! function_exists('ns_text_destroy')) {
    function ns_text_destroy(int $text): void
    {
        NSText::destroy($text);
    }
}

if (! function_exists('ns_text_nstext')) {
    function ns_text_nstext(int $text): int
    {
        return NSText::nsText($text);
    }
}

if (! function_exists('ns_text_set_string')) {
    function ns_text_set_string(int $text, string $value): void
    {
        NSText::setString($text, $value);
    }
}

if (! function_exists('ns_text_get_string')) {
    function ns_text_get_string(int $text): string
    {
        return NSText::getString($text);
    }
}

if (! function_exists('ns_text_set_editable')) {
    function ns_text_set_editable(int $text, bool $editable): void
    {
        NSText::setEditable($text, $editable);
    }
}

if (! function_exists('ns_text_is_editable')) {
    function ns_text_is_editable(int $text): bool
    {
        return NSText::isEditable($text);
    }
}

if (! function_exists('ns_text_set_selectable')) {
    function ns_text_set_selectable(int $text, bool $selectable): void
    {
        NSText::setSelectable($text, $selectable);
    }
}

if (! function_exists('ns_text_is_selectable')) {
    function ns_text_is_selectable(int $text): bool
    {
        return NSText::isSelectable($text);
    }
}

if (! function_exists('ns_text_set_rich_text')) {
    function ns_text_set_rich_text(int $text, bool $richText): void
    {
        NSText::setRichText($text, $richText);
    }
}

if (! function_exists('ns_text_is_rich_text')) {
    function ns_text_is_rich_text(int $text): bool
    {
        return NSText::isRichText($text);
    }
}

if (! function_exists('ns_text_set_draws_background')) {
    function ns_text_set_draws_background(int $text, bool $drawsBackground): void
    {
        NSText::setDrawsBackground($text, $drawsBackground);
    }
}

if (! function_exists('ns_text_draws_background')) {
    function ns_text_draws_background(int $text): bool
    {
        return NSText::drawsBackground($text);
    }
}

if (! function_exists('ns_text_set_background_color')) {
    function ns_text_set_background_color(int $text, int $color): void
    {
        NSText::setBackgroundColor($text, $color);
    }
}

if (! function_exists('ns_text_set_text_color')) {
    function ns_text_set_text_color(int $text, int $color): void
    {
        NSText::setTextColor($text, $color);
    }
}

if (! function_exists('ns_text_set_font')) {
    function ns_text_set_font(int $text, int $font): void
    {
        NSText::setFont($text, $font);
    }
}

if (! function_exists('ns_text_set_alignment')) {
    function ns_text_set_alignment(int $text, int $alignment): void
    {
        NSText::setAlignment($text, $alignment);
    }
}

if (! function_exists('ns_text_get_alignment')) {
    function ns_text_get_alignment(int $text): int
    {
        return NSText::getAlignment($text);
    }
}

if (! function_exists('ns_text_set_writing_direction')) {
    function ns_text_set_writing_direction(int $text, int $direction): void
    {
        NSText::setWritingDirection($text, $direction);
    }
}

if (! function_exists('ns_text_get_writing_direction')) {
    function ns_text_get_writing_direction(int $text): int
    {
        return NSText::getWritingDirection($text);
    }
}

if (! function_exists('ns_text_set_selected_range')) {
    function ns_text_set_selected_range(int $text, int $location, int $length): void
    {
        NSText::setSelectedRange($text, $location, $length);
    }
}

if (! function_exists('ns_text_get_selected_range')) {
    function ns_text_get_selected_range(int $text): array
    {
        return NSText::getSelectedRange($text);
    }
}

if (! function_exists('ns_text_size_to_fit')) {
    function ns_text_size_to_fit(int $text): void
    {
        NSText::sizeToFit($text);
    }
}
