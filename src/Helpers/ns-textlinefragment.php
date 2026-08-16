<?php

use AppKit\NS\NSTextLineFragment\NSTextLineFragment;

/*
| NSTextLineFragment helpers — 1:1 over AppKit\NS\NSTextLineFragment\NSTextLineFragment
*/

if (! function_exists('ns_textlinefragment_create_with_string')) {
    function ns_textlinefragment_create_with_string(string $value, int $location, int $length): int
    {
        return NSTextLineFragment::createWithString($value, $location, $length);
    }
}

if (! function_exists('ns_textlinefragment_wrap')) {
    function ns_textlinefragment_wrap(int $nsTextLineFragmentPtr): int
    {
        return NSTextLineFragment::wrap($nsTextLineFragmentPtr);
    }
}

if (! function_exists('ns_textlinefragment_destroy')) {
    function ns_textlinefragment_destroy(int $fragment): void
    {
        NSTextLineFragment::destroy($fragment);
    }
}

if (! function_exists('ns_textlinefragment_character_range')) {
    function ns_textlinefragment_character_range(int $fragment): array
    {
        return NSTextLineFragment::characterRange($fragment);
    }
}

if (! function_exists('ns_textlinefragment_typographic_bounds')) {
    function ns_textlinefragment_typographic_bounds(int $fragment): array
    {
        return NSTextLineFragment::typographicBounds($fragment);
    }
}

if (! function_exists('ns_textlinefragment_glyph_origin')) {
    function ns_textlinefragment_glyph_origin(int $fragment): array
    {
        return NSTextLineFragment::glyphOrigin($fragment);
    }
}
