<?php

use AppKit\NS\NSTypesetter\NSTypesetter;

/*
| NSTypesetter helpers — 1:1 over AppKit\NS\NSTypesetter\NSTypesetter
*/

if (! function_exists('ns_typesetter_shared_system_typesetter')) {
    function ns_typesetter_shared_system_typesetter(): int
    {
        return NSTypesetter::sharedSystemTypesetter();
    }
}

if (! function_exists('ns_typesetter_shared_system_typesetter_for_behavior')) {
    function ns_typesetter_shared_system_typesetter_for_behavior(int $behavior): int
    {
        return NSTypesetter::sharedSystemTypesetterForBehavior($behavior);
    }
}

if (! function_exists('ns_typesetter_default_typesetter_behavior')) {
    function ns_typesetter_default_typesetter_behavior(): int
    {
        return NSTypesetter::defaultTypesetterBehavior();
    }
}

if (! function_exists('ns_typesetter_wrap')) {
    function ns_typesetter_wrap(int $nsTypesetterPtr): int
    {
        return NSTypesetter::wrap($nsTypesetterPtr);
    }
}

if (! function_exists('ns_typesetter_destroy')) {
    function ns_typesetter_destroy(int $typesetter): void
    {
        NSTypesetter::destroy($typesetter);
    }
}

if (! function_exists('ns_typesetter_uses_font_leading')) {
    function ns_typesetter_uses_font_leading(int $typesetter): bool
    {
        return NSTypesetter::usesFontLeading($typesetter);
    }
}

if (! function_exists('ns_typesetter_set_uses_font_leading')) {
    function ns_typesetter_set_uses_font_leading(int $typesetter, bool $flag): void
    {
        NSTypesetter::setUsesFontLeading($typesetter, $flag);
    }
}

if (! function_exists('ns_typesetter_typesetter_behavior')) {
    function ns_typesetter_typesetter_behavior(int $typesetter): int
    {
        return NSTypesetter::getTypesetterBehavior($typesetter);
    }
}

if (! function_exists('ns_typesetter_set_typesetter_behavior')) {
    function ns_typesetter_set_typesetter_behavior(int $typesetter, int $behavior): void
    {
        NSTypesetter::setTypesetterBehavior($typesetter, $behavior);
    }
}

if (! function_exists('ns_typesetter_hyphenation_factor')) {
    function ns_typesetter_hyphenation_factor(int $typesetter): float
    {
        return NSTypesetter::getHyphenationFactor($typesetter);
    }
}

if (! function_exists('ns_typesetter_set_hyphenation_factor')) {
    function ns_typesetter_set_hyphenation_factor(int $typesetter, float $factor): void
    {
        NSTypesetter::setHyphenationFactor($typesetter, $factor);
    }
}

if (! function_exists('ns_typesetter_line_fragment_padding')) {
    function ns_typesetter_line_fragment_padding(int $typesetter): float
    {
        return NSTypesetter::getLineFragmentPadding($typesetter);
    }
}

if (! function_exists('ns_typesetter_set_line_fragment_padding')) {
    function ns_typesetter_set_line_fragment_padding(int $typesetter, float $padding): void
    {
        NSTypesetter::setLineFragmentPadding($typesetter, $padding);
    }
}

if (! function_exists('ns_typesetter_bidi_processing_enabled')) {
    function ns_typesetter_bidi_processing_enabled(int $typesetter): bool
    {
        return NSTypesetter::bidiProcessingEnabled($typesetter);
    }
}

if (! function_exists('ns_typesetter_set_bidi_processing_enabled')) {
    function ns_typesetter_set_bidi_processing_enabled(int $typesetter, bool $flag): void
    {
        NSTypesetter::setBidiProcessingEnabled($typesetter, $flag);
    }
}
