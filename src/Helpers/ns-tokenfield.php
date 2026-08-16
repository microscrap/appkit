<?php

use AppKit\NS\NSTokenField\NSTokenField;
use Microscrap\Bindings\AppKit\Enums\TokenStyle;

/*
| NSTokenField helpers — 1:1 over AppKit\NS\NSTokenField\NSTokenField
*/

if (! function_exists('ns_tokenfield_create')) {
    function ns_tokenfield_create(int $x, int $y, int $width, int $height, string $value = ''): int
    {
        return NSTokenField::create($x, $y, $width, $height, $value);
    }
}

if (! function_exists('ns_tokenfield_destroy')) {
    function ns_tokenfield_destroy(int $field): void
    {
        NSTokenField::destroy($field);
    }
}

if (! function_exists('ns_tokenfield_set_string')) {
    function ns_tokenfield_set_string(int $field, string $value): void
    {
        NSTokenField::setStringValue($field, $value);
    }
}

if (! function_exists('ns_tokenfield_get_string')) {
    function ns_tokenfield_get_string(int $field): string
    {
        return NSTokenField::getStringValue($field);
    }
}

if (! function_exists('ns_tokenfield_set_token_style')) {
    function ns_tokenfield_set_token_style(int $field, TokenStyle|int $style): void
    {
        NSTokenField::setTokenStyle($field, $style instanceof TokenStyle ? $style->value : $style);
    }
}

if (! function_exists('ns_tokenfield_get_token_style')) {
    function ns_tokenfield_get_token_style(int $field): int
    {
        return NSTokenField::getTokenStyle($field);
    }
}

if (! function_exists('ns_tokenfield_set_completion_delay')) {
    function ns_tokenfield_set_completion_delay(int $field, float $delay): void
    {
        NSTokenField::setCompletionDelay($field, $delay);
    }
}

if (! function_exists('ns_tokenfield_get_completion_delay')) {
    function ns_tokenfield_get_completion_delay(int $field): float
    {
        return NSTokenField::getCompletionDelay($field);
    }
}

if (! function_exists('ns_tokenfield_default_completion_delay')) {
    function ns_tokenfield_default_completion_delay(): float
    {
        return NSTokenField::defaultCompletionDelay();
    }
}

if (! function_exists('ns_tokenfield_poll_change')) {
    function ns_tokenfield_poll_change(int $field): bool
    {
        return NSTokenField::pollChange($field);
    }
}
