<?php

use AppKit\NS\NSCIImageRep\NSCIImageRep;

/*
| NSCIImageRep helpers — 1:1 over AppKit\NS\NSCIImageRep\NSCIImageRep
*/

if (! function_exists('ns_ciimagerep_wrap')) {
    function ns_ciimagerep_wrap(int $nsCIImageRepPtr): int
    {
        return NSCIImageRep::wrap($nsCIImageRepPtr);
    }
}

if (! function_exists('ns_ciimagerep_destroy')) {
    function ns_ciimagerep_destroy(int $rep): void
    {
        NSCIImageRep::destroy($rep);
    }
}

if (! function_exists('ns_ciimagerep_nsciimagerep')) {
    function ns_ciimagerep_nsciimagerep(int $rep): int
    {
        return NSCIImageRep::nsCIImageRep($rep);
    }
}

if (! function_exists('ns_ciimagerep_with_ciimage')) {
    function ns_ciimagerep_with_ciimage(int $ciImagePtr): int
    {
        return NSCIImageRep::withCIImage($ciImagePtr);
    }
}

if (! function_exists('ns_ciimagerep_ciimage')) {
    function ns_ciimagerep_ciimage(int $rep): int
    {
        return NSCIImageRep::ciImage($rep);
    }
}
