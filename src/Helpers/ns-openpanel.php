<?php

use AppKit\NS\NSOpenPanel\NSOpenPanel;

/*
| NSOpenPanel helpers — 1:1 over AppKit\NS\NSOpenPanel\NSOpenPanel
*/

if (! function_exists('ns_openpanel_run')) {
    function ns_openpanel_run(string $directory = ''): string
    {
        return NSOpenPanel::runModal($directory);
    }
}
