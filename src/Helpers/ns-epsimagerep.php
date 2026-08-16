<?php

use AppKit\NS\NSEPSImageRep\NSEPSImageRep;

/*
| NSEPSImageRep helpers — 1:1 over AppKit\NS\NSEPSImageRep\NSEPSImageRep
| Deprecated; creation returns 0 on macOS 14+.
*/

if (! function_exists('ns_epsimagerep_wrap')) {
    function ns_epsimagerep_wrap(int $nsEPSImageRepPtr): int
    {
        return NSEPSImageRep::wrap($nsEPSImageRepPtr);
    }
}

if (! function_exists('ns_epsimagerep_destroy')) {
    function ns_epsimagerep_destroy(int $rep): void
    {
        NSEPSImageRep::destroy($rep);
    }
}

if (! function_exists('ns_epsimagerep_nsepsimagerep')) {
    function ns_epsimagerep_nsepsimagerep(int $rep): int
    {
        return NSEPSImageRep::nsEPSImageRep($rep);
    }
}

if (! function_exists('ns_epsimagerep_with_data')) {
    function ns_epsimagerep_with_data(string $data): int
    {
        return NSEPSImageRep::withData($data);
    }
}

if (! function_exists('ns_epsimagerep_get_bounding_box')) {
    function ns_epsimagerep_get_bounding_box(int $rep): array
    {
        return NSEPSImageRep::getBoundingBox($rep);
    }
}

if (! function_exists('ns_epsimagerep_get_eps_representation')) {
    function ns_epsimagerep_get_eps_representation(int $rep): string
    {
        return NSEPSImageRep::epsRepresentation($rep);
    }
}
