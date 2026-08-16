<?php

use AppKit\NS\NSSecureTextField\NSSecureTextField;

/*
| NSSecureTextField helpers — 1:1 over AppKit\NS\NSSecureTextField\NSSecureTextField
*/

if (! function_exists('ns_securetextfield_create')) {
    function ns_securetextfield_create(int $x, int $y, int $width, int $height, string $value = ''): int
    {
        return NSSecureTextField::create($x, $y, $width, $height, $value);
    }
}

if (! function_exists('ns_securetextfield_destroy')) {
    function ns_securetextfield_destroy(int $field): void
    {
        NSSecureTextField::destroy($field);
    }
}

if (! function_exists('ns_securetextfield_set_string')) {
    function ns_securetextfield_set_string(int $field, string $value): void
    {
        NSSecureTextField::setStringValue($field, $value);
    }
}

if (! function_exists('ns_securetextfield_get_string')) {
    function ns_securetextfield_get_string(int $field): string
    {
        return NSSecureTextField::getStringValue($field);
    }
}

if (! function_exists('ns_securetextfield_poll_change')) {
    function ns_securetextfield_poll_change(int $field): bool
    {
        return NSSecureTextField::pollChange($field);
    }
}
