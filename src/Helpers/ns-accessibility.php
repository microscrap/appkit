<?php

use AppKit\NS\NSAccessibility\NSAccessibility;

/*
| NSAccessibility helpers — 1:1 over AppKit\NS\NSAccessibility\NSAccessibility
*/

if (! function_exists('ns_accessibility_attach')) {
    function ns_accessibility_attach(int $handle): bool
    {
        return NSAccessibility::attach($handle);
    }
}

if (! function_exists('ns_accessibility_poll')) {
    function ns_accessibility_poll(): array
    {
        return NSAccessibility::poll();
    }
}
