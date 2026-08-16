<?php

use AppKit\NS\NSCustomImageRep\NSCustomImageRep;

/*
| NSCustomImageRep helpers — 1:1 over AppKit\NS\NSCustomImageRep\NSCustomImageRep
*/

if (! function_exists('ns_customimagerep_wrap')) {
    function ns_customimagerep_wrap(int $nsCustomImageRepPtr): int
    {
        return NSCustomImageRep::wrap($nsCustomImageRepPtr);
    }
}

if (! function_exists('ns_customimagerep_destroy')) {
    function ns_customimagerep_destroy(int $rep): void
    {
        NSCustomImageRep::destroy($rep);
    }
}

if (! function_exists('ns_customimagerep_nscustomimagerep')) {
    function ns_customimagerep_nscustomimagerep(int $rep): int
    {
        return NSCustomImageRep::nsCustomImageRep($rep);
    }
}

if (! function_exists('ns_customimagerep_create')) {
    function ns_customimagerep_create(float $width, float $height, bool $flipped = true): int
    {
        return NSCustomImageRep::create($width, $height, $flipped);
    }
}

if (! function_exists('ns_customimagerep_draw_selector')) {
    function ns_customimagerep_draw_selector(int $rep): int
    {
        return NSCustomImageRep::drawSelector($rep);
    }
}

if (! function_exists('ns_customimagerep_delegate')) {
    function ns_customimagerep_delegate(int $rep): int
    {
        return NSCustomImageRep::delegate($rep);
    }
}
