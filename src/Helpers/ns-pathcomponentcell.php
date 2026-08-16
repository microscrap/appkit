<?php

use AppKit\NS\NSPathComponentCell\NSPathComponentCell;

/*
| NSPathComponentCell helpers — 1:1 over AppKit\NS\NSPathComponentCell\NSPathComponentCell
*/

if (! function_exists('ns_pathcomponentcell_create_text')) {
    function ns_pathcomponentcell_create_text(string $value = ''): int
    {
        return NSPathComponentCell::createText($value);
    }
}

if (! function_exists('ns_pathcomponentcell_wrap')) {
    function ns_pathcomponentcell_wrap(int $nsPathComponentCellPtr): int
    {
        return NSPathComponentCell::wrap($nsPathComponentCellPtr);
    }
}

if (! function_exists('ns_pathcomponentcell_destroy')) {
    function ns_pathcomponentcell_destroy(int $cell): void
    {
        NSPathComponentCell::destroy($cell);
    }
}

if (! function_exists('ns_pathcomponentcell_nspathcomponentcell')) {
    function ns_pathcomponentcell_nspathcomponentcell(int $cell): int
    {
        return NSPathComponentCell::nsPathComponentCell($cell);
    }
}

if (! function_exists('ns_pathcomponentcell_set_title')) {
    function ns_pathcomponentcell_set_title(int $cell, string $title): void
    {
        NSPathComponentCell::setTitle($cell, $title);
    }
}

if (! function_exists('ns_pathcomponentcell_get_title')) {
    function ns_pathcomponentcell_get_title(int $cell): string
    {
        return NSPathComponentCell::getTitle($cell);
    }
}

if (! function_exists('ns_pathcomponentcell_set_string')) {
    function ns_pathcomponentcell_set_string(int $cell, string $value): void
    {
        NSPathComponentCell::setStringValue($cell, $value);
    }
}

if (! function_exists('ns_pathcomponentcell_get_string')) {
    function ns_pathcomponentcell_get_string(int $cell): string
    {
        return NSPathComponentCell::getStringValue($cell);
    }
}

if (! function_exists('ns_pathcomponentcell_set_image')) {
    function ns_pathcomponentcell_set_image(int $cell, int $image): void
    {
        NSPathComponentCell::setImage($cell, $image);
    }
}

if (! function_exists('ns_pathcomponentcell_get_image')) {
    function ns_pathcomponentcell_get_image(int $cell): int
    {
        return NSPathComponentCell::getImage($cell);
    }
}

if (! function_exists('ns_pathcomponentcell_set_url_path')) {
    function ns_pathcomponentcell_set_url_path(int $cell, string $path): void
    {
        NSPathComponentCell::setUrlPath($cell, $path);
    }
}

if (! function_exists('ns_pathcomponentcell_get_url_path')) {
    function ns_pathcomponentcell_get_url_path(int $cell): string
    {
        return NSPathComponentCell::getUrlPath($cell);
    }
}
