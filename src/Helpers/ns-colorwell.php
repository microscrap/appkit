<?php

use AppKit\NS\NSColorWell\NSColorWell;

/*
| NSColorWell helpers — 1:1 over AppKit\NS\NSColorWell\NSColorWell
*/

if (! function_exists('ns_colorwell_create')) {
    function ns_colorwell_create(int $x, int $y, int $width, int $height): int
    {
        return NSColorWell::create($x, $y, $width, $height);
    }
}

if (! function_exists('ns_colorwell_destroy')) {
    function ns_colorwell_destroy(int $well): void
    {
        NSColorWell::destroy($well);
    }
}

if (! function_exists('ns_colorwell_set_rgba')) {
    function ns_colorwell_set_rgba(int $well, int $r, int $g, int $b, int $a = 255): void
    {
        NSColorWell::setRgba($well, $r, $g, $b, $a);
    }
}

if (! function_exists('ns_colorwell_get_rgba')) {
    function ns_colorwell_get_rgba(int $well): array
    {
        return NSColorWell::getRgba($well);
    }
}

if (! function_exists('ns_colorwell_poll_change')) {
    function ns_colorwell_poll_change(int $well): bool
    {
        return NSColorWell::pollChange($well);
    }
}
