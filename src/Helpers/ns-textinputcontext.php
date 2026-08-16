<?php

use AppKit\NS\NSTextInputContext\NSTextInputContext;

/*
| NSTextInputContext helpers — 1:1 over AppKit\NS\NSTextInputContext\NSTextInputContext
*/

if (! function_exists('ns_textinputcontext_current')) {
    function ns_textinputcontext_current(): int
    {
        return NSTextInputContext::current();
    }
}

if (! function_exists('ns_textinputcontext_create')) {
    function ns_textinputcontext_create(int $clientPtr): int
    {
        return NSTextInputContext::create($clientPtr);
    }
}

if (! function_exists('ns_textinputcontext_wrap')) {
    function ns_textinputcontext_wrap(int $nsTextInputContextPtr): int
    {
        return NSTextInputContext::wrap($nsTextInputContextPtr);
    }
}

if (! function_exists('ns_textinputcontext_destroy')) {
    function ns_textinputcontext_destroy(int $context): void
    {
        NSTextInputContext::destroy($context);
    }
}

if (! function_exists('ns_textinputcontext_nstextinputcontext')) {
    function ns_textinputcontext_nstextinputcontext(int $context): int
    {
        return NSTextInputContext::nsTextInputContext($context);
    }
}

if (! function_exists('ns_textinputcontext_client')) {
    function ns_textinputcontext_client(int $context): int
    {
        return NSTextInputContext::client($context);
    }
}

if (! function_exists('ns_textinputcontext_set_accepts_glyph_info')) {
    function ns_textinputcontext_set_accepts_glyph_info(int $context, bool $flag): void
    {
        NSTextInputContext::setAcceptsGlyphInfo($context, $flag);
    }
}

if (! function_exists('ns_textinputcontext_accepts_glyph_info')) {
    function ns_textinputcontext_accepts_glyph_info(int $context): bool
    {
        return NSTextInputContext::acceptsGlyphInfo($context);
    }
}

if (! function_exists('ns_textinputcontext_activate')) {
    function ns_textinputcontext_activate(int $context): void
    {
        NSTextInputContext::activate($context);
    }
}

if (! function_exists('ns_textinputcontext_deactivate')) {
    function ns_textinputcontext_deactivate(int $context): void
    {
        NSTextInputContext::deactivate($context);
    }
}

if (! function_exists('ns_textinputcontext_handle_event')) {
    function ns_textinputcontext_handle_event(int $context, int $nseventPtr): bool
    {
        return NSTextInputContext::handleEvent($context, $nseventPtr);
    }
}

if (! function_exists('ns_textinputcontext_discard_marked_text')) {
    function ns_textinputcontext_discard_marked_text(int $context): void
    {
        NSTextInputContext::discardMarkedText($context);
    }
}

if (! function_exists('ns_textinputcontext_invalidate_character_coordinates')) {
    function ns_textinputcontext_invalidate_character_coordinates(int $context): void
    {
        NSTextInputContext::invalidateCharacterCoordinates($context);
    }
}
