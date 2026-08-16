<?php

use AppKit\NS\NSNib\NSNib;

/*
| NSNib helpers — 1:1 over AppKit\NS\NSNib\NSNib
*/

if (! function_exists('ns_nib_create_named')) {
    function ns_nib_create_named(string $nibName, string $bundlePath = ''): int
    {
        return NSNib::createNamed($nibName, $bundlePath);
    }
}

if (! function_exists('ns_nib_wrap')) {
    function ns_nib_wrap(int $nsNibPtr): int
    {
        return NSNib::wrap($nsNibPtr);
    }
}

if (! function_exists('ns_nib_destroy')) {
    function ns_nib_destroy(int $nib): void
    {
        NSNib::destroy($nib);
    }
}

if (! function_exists('ns_nib_nsnib')) {
    function ns_nib_nsnib(int $nib): int
    {
        return NSNib::nsNib($nib);
    }
}

if (! function_exists('ns_nib_instantiate_with_owner')) {
    function ns_nib_instantiate_with_owner(int $nib, int $ownerPtr): bool
    {
        return NSNib::instantiateWithOwner($nib, $ownerPtr);
    }
}

if (! function_exists('ns_nib_instantiate_with_owner_top_level_count')) {
    function ns_nib_instantiate_with_owner_top_level_count(int $nib, int $ownerPtr): int
    {
        return NSNib::instantiateWithOwnerTopLevelCount($nib, $ownerPtr);
    }
}
