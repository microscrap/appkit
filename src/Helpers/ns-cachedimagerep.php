<?php

use AppKit\NS\NSCachedImageRep\NSCachedImageRep;

/*
| NSCachedImageRep helpers — 1:1 over AppKit\NS\NSCachedImageRep\NSCachedImageRep
| Deprecated in AppKit (macOS 10.0–10.6). Bound for SDK completeness.
*/

if (! function_exists('ns_cachedimagerep_wrap')) {
    function ns_cachedimagerep_wrap(int $nsCachedImageRepPtr): int
    {
        return NSCachedImageRep::wrap($nsCachedImageRepPtr);
    }
}

if (! function_exists('ns_cachedimagerep_destroy')) {
    function ns_cachedimagerep_destroy(int $rep): void
    {
        NSCachedImageRep::destroy($rep);
    }
}

if (! function_exists('ns_cachedimagerep_nscachedimagerep')) {
    function ns_cachedimagerep_nscachedimagerep(int $rep): int
    {
        return NSCachedImageRep::nsCachedImageRep($rep);
    }
}

if (! function_exists('ns_cachedimagerep_with_window_rect')) {
    function ns_cachedimagerep_with_window_rect(int $window, float $x, float $y, float $width, float $height): int
    {
        return NSCachedImageRep::withWindowRect($window, $x, $y, $width, $height);
    }
}

if (! function_exists('ns_cachedimagerep_with_size')) {
    function ns_cachedimagerep_with_size(float $width, float $height, int $depth, bool $separate, bool $alpha): int
    {
        return NSCachedImageRep::withSize($width, $height, $depth, $separate, $alpha);
    }
}

if (! function_exists('ns_cachedimagerep_window')) {
    function ns_cachedimagerep_window(int $rep): int
    {
        return NSCachedImageRep::window($rep);
    }
}

if (! function_exists('ns_cachedimagerep_get_rect')) {
    function ns_cachedimagerep_get_rect(int $rep): array
    {
        return NSCachedImageRep::getRect($rep);
    }
}
