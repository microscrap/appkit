<?php

use AppKit\NS\NSGlyphGenerator\NSGlyphGenerator;

/*
| NSGlyphGenerator helpers — 1:1 over AppKit\NS\NSGlyphGenerator\NSGlyphGenerator
*/

if (! function_exists('ns_glyphgenerator_shared_glyph_generator')) {
    function ns_glyphgenerator_shared_glyph_generator(): int
    {
        return NSGlyphGenerator::sharedGlyphGenerator();
    }
}

if (! function_exists('ns_glyphgenerator_wrap')) {
    function ns_glyphgenerator_wrap(int $nsGlyphGeneratorPtr): int
    {
        return NSGlyphGenerator::wrap($nsGlyphGeneratorPtr);
    }
}

if (! function_exists('ns_glyphgenerator_destroy')) {
    function ns_glyphgenerator_destroy(int $generator): void
    {
        NSGlyphGenerator::destroy($generator);
    }
}
