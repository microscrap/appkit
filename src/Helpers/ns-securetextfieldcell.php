<?php

use AppKit\NS\NSSecureTextFieldCell\NSSecureTextFieldCell;

/*
| NSSecureTextFieldCell helpers — 1:1 over AppKit\NS\NSSecureTextFieldCell\NSSecureTextFieldCell
*/

if (! function_exists('ns_securetextfieldcell_create_text')) {
    function ns_securetextfieldcell_create_text(string $value = ''): int
    {
        return NSSecureTextFieldCell::createText($value);
    }
}

if (! function_exists('ns_securetextfieldcell_wrap')) {
    function ns_securetextfieldcell_wrap(int $nsSecureTextFieldCellPtr): int
    {
        return NSSecureTextFieldCell::wrap($nsSecureTextFieldCellPtr);
    }
}

if (! function_exists('ns_securetextfieldcell_destroy')) {
    function ns_securetextfieldcell_destroy(int $cell): void
    {
        NSSecureTextFieldCell::destroy($cell);
    }
}

if (! function_exists('ns_securetextfieldcell_nssecuretextfieldcell')) {
    function ns_securetextfieldcell_nssecuretextfieldcell(int $cell): int
    {
        return NSSecureTextFieldCell::nsSecureTextFieldCell($cell);
    }
}

if (! function_exists('ns_securetextfieldcell_set_echos_bullets')) {
    function ns_securetextfieldcell_set_echos_bullets(int $cell, bool $echosBullets): void
    {
        NSSecureTextFieldCell::setEchosBullets($cell, $echosBullets);
    }
}

if (! function_exists('ns_securetextfieldcell_echos_bullets')) {
    function ns_securetextfieldcell_echos_bullets(int $cell): bool
    {
        return NSSecureTextFieldCell::echosBullets($cell);
    }
}

if (! function_exists('ns_securetextfieldcell_set_string')) {
    function ns_securetextfieldcell_set_string(int $cell, string $value): void
    {
        NSSecureTextFieldCell::setStringValue($cell, $value);
    }
}

if (! function_exists('ns_securetextfieldcell_get_string')) {
    function ns_securetextfieldcell_get_string(int $cell): string
    {
        return NSSecureTextFieldCell::getStringValue($cell);
    }
}

if (! function_exists('ns_securetextfieldcell_set_placeholder_string')) {
    function ns_securetextfieldcell_set_placeholder_string(int $cell, string $placeholder): void
    {
        NSSecureTextFieldCell::setPlaceholderString($cell, $placeholder);
    }
}

if (! function_exists('ns_securetextfieldcell_get_placeholder_string')) {
    function ns_securetextfieldcell_get_placeholder_string(int $cell): string
    {
        return NSSecureTextFieldCell::getPlaceholderString($cell);
    }
}

if (! function_exists('ns_securetextfieldcell_set_bezel_style')) {
    function ns_securetextfieldcell_set_bezel_style(int $cell, int $style): void
    {
        NSSecureTextFieldCell::setBezelStyle($cell, $style);
    }
}

if (! function_exists('ns_securetextfieldcell_get_bezel_style')) {
    function ns_securetextfieldcell_get_bezel_style(int $cell): int
    {
        return NSSecureTextFieldCell::getBezelStyle($cell);
    }
}
