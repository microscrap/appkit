<?php

use AppKit\NS\NSSavePanel\NSSavePanel;

/*
| NSSavePanel helpers — 1:1 over AppKit\NS\NSSavePanel\NSSavePanel
*/

if (! function_exists('ns_savepanel_run')) {
    function ns_savepanel_run(string $directory = '', string $name = ''): string
    {
        return NSSavePanel::runModal($directory, $name);
    }
}
