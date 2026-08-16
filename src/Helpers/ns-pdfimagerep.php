<?php

use AppKit\NS\NSPDFImageRep\NSPDFImageRep;

/*
| NSPDFImageRep helpers — 1:1 over AppKit\NS\NSPDFImageRep\NSPDFImageRep
*/

if (! function_exists('ns_pdfimagerep_wrap')) {
    function ns_pdfimagerep_wrap(int $nsPDFImageRepPtr): int
    {
        return NSPDFImageRep::wrap($nsPDFImageRepPtr);
    }
}

if (! function_exists('ns_pdfimagerep_destroy')) {
    function ns_pdfimagerep_destroy(int $rep): void
    {
        NSPDFImageRep::destroy($rep);
    }
}

if (! function_exists('ns_pdfimagerep_nspdfimagerep')) {
    function ns_pdfimagerep_nspdfimagerep(int $rep): int
    {
        return NSPDFImageRep::nsPDFImageRep($rep);
    }
}

if (! function_exists('ns_pdfimagerep_with_data')) {
    function ns_pdfimagerep_with_data(string $data): int
    {
        return NSPDFImageRep::withData($data);
    }
}

if (! function_exists('ns_pdfimagerep_get_bounds')) {
    function ns_pdfimagerep_get_bounds(int $rep): array
    {
        return NSPDFImageRep::getBounds($rep);
    }
}

if (! function_exists('ns_pdfimagerep_get_pdf_representation')) {
    function ns_pdfimagerep_get_pdf_representation(int $rep): string
    {
        return NSPDFImageRep::pdfRepresentation($rep);
    }
}

if (! function_exists('ns_pdfimagerep_current_page')) {
    function ns_pdfimagerep_current_page(int $rep): int
    {
        return NSPDFImageRep::currentPage($rep);
    }
}

if (! function_exists('ns_pdfimagerep_set_current_page')) {
    function ns_pdfimagerep_set_current_page(int $rep, int $page): void
    {
        NSPDFImageRep::setCurrentPage($rep, $page);
    }
}

if (! function_exists('ns_pdfimagerep_page_count')) {
    function ns_pdfimagerep_page_count(int $rep): int
    {
        return NSPDFImageRep::pageCount($rep);
    }
}
