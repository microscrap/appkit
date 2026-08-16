<?php

use AppKit\NS\NSTokenFieldCell\NSTokenFieldCell;
use Microscrap\Bindings\AppKit\Enums\TokenStyle;

/*
| NSTokenFieldCell helpers — 1:1 over AppKit\NS\NSTokenFieldCell\NSTokenFieldCell
*/

if (! function_exists('ns_tokenfieldcell_create_text')) {
    function ns_tokenfieldcell_create_text(string $value = ''): int
    {
        return NSTokenFieldCell::createText($value);
    }
}

if (! function_exists('ns_tokenfieldcell_wrap')) {
    function ns_tokenfieldcell_wrap(int $nsTokenFieldCellPtr): int
    {
        return NSTokenFieldCell::wrap($nsTokenFieldCellPtr);
    }
}

if (! function_exists('ns_tokenfieldcell_destroy')) {
    function ns_tokenfieldcell_destroy(int $cell): void
    {
        NSTokenFieldCell::destroy($cell);
    }
}

if (! function_exists('ns_tokenfieldcell_nstokenfieldcell')) {
    function ns_tokenfieldcell_nstokenfieldcell(int $cell): int
    {
        return NSTokenFieldCell::nsTokenFieldCell($cell);
    }
}

if (! function_exists('ns_tokenfieldcell_set_string')) {
    function ns_tokenfieldcell_set_string(int $cell, string $value): void
    {
        NSTokenFieldCell::setStringValue($cell, $value);
    }
}

if (! function_exists('ns_tokenfieldcell_get_string')) {
    function ns_tokenfieldcell_get_string(int $cell): string
    {
        return NSTokenFieldCell::getStringValue($cell);
    }
}

if (! function_exists('ns_tokenfieldcell_set_token_style')) {
    function ns_tokenfieldcell_set_token_style(int $cell, TokenStyle|int $style): void
    {
        NSTokenFieldCell::setTokenStyle($cell, $style instanceof TokenStyle ? $style->value : $style);
    }
}

if (! function_exists('ns_tokenfieldcell_get_token_style')) {
    function ns_tokenfieldcell_get_token_style(int $cell): int
    {
        return NSTokenFieldCell::getTokenStyle($cell);
    }
}

if (! function_exists('ns_tokenfieldcell_set_completion_delay')) {
    function ns_tokenfieldcell_set_completion_delay(int $cell, float $delay): void
    {
        NSTokenFieldCell::setCompletionDelay($cell, $delay);
    }
}

if (! function_exists('ns_tokenfieldcell_get_completion_delay')) {
    function ns_tokenfieldcell_get_completion_delay(int $cell): float
    {
        return NSTokenFieldCell::getCompletionDelay($cell);
    }
}

if (! function_exists('ns_tokenfieldcell_default_completion_delay')) {
    function ns_tokenfieldcell_default_completion_delay(): float
    {
        return NSTokenFieldCell::defaultCompletionDelay();
    }
}
