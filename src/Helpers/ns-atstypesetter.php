<?php

use AppKit\NS\NSATSTypesetter\NSATSTypesetter;

/*
| NSATSTypesetter helpers — 1:1 over AppKit\NS\NSATSTypesetter\NSATSTypesetter
*/

if (! function_exists('ns_atstypesetter_shared_typesetter')) {
    function ns_atstypesetter_shared_typesetter(): int
    {
        return NSATSTypesetter::sharedTypesetter();
    }
}

if (! function_exists('ns_atstypesetter_wrap')) {
    function ns_atstypesetter_wrap(int $nsATSTypesetterPtr): int
    {
        return NSATSTypesetter::wrap($nsATSTypesetterPtr);
    }
}

if (! function_exists('ns_atstypesetter_destroy')) {
    function ns_atstypesetter_destroy(int $typesetter): void
    {
        NSATSTypesetter::destroy($typesetter);
    }
}
