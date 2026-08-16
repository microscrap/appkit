<?php

use AppKit\NS\NSAdaptiveImageGlyph\NSAdaptiveImageGlyph;

/*
| NSAdaptiveImageGlyph helpers — 1:1 over AppKit\NS\NSAdaptiveImageGlyph\NSAdaptiveImageGlyph
*/

if (! function_exists('ns_adaptiveimageglyph_create_with_image_content')) {
    function ns_adaptiveimageglyph_create_with_image_content(string $data): int
    {
        return NSAdaptiveImageGlyph::createWithImageContent($data);
    }
}

if (! function_exists('ns_adaptiveimageglyph_wrap')) {
    function ns_adaptiveimageglyph_wrap(int $nsAdaptiveImageGlyphPtr): int
    {
        return NSAdaptiveImageGlyph::wrap($nsAdaptiveImageGlyphPtr);
    }
}

if (! function_exists('ns_adaptiveimageglyph_destroy')) {
    function ns_adaptiveimageglyph_destroy(int $glyph): void
    {
        NSAdaptiveImageGlyph::destroy($glyph);
    }
}

if (! function_exists('ns_adaptiveimageglyph_content_identifier')) {
    function ns_adaptiveimageglyph_content_identifier(int $glyph): string
    {
        return NSAdaptiveImageGlyph::contentIdentifier($glyph);
    }
}

if (! function_exists('ns_adaptiveimageglyph_content_description')) {
    function ns_adaptiveimageglyph_content_description(int $glyph): string
    {
        return NSAdaptiveImageGlyph::contentDescription($glyph);
    }
}

if (! function_exists('ns_adaptiveimageglyph_content_type_identifier')) {
    function ns_adaptiveimageglyph_content_type_identifier(int $glyph): string
    {
        return NSAdaptiveImageGlyph::contentTypeIdentifier($glyph);
    }
}
