<?php

use AppKit\NS\NSStoryboardSegue\NSStoryboardSegue;

/*
| NSStoryboardSegue helpers — 1:1 over AppKit\NS\NSStoryboardSegue\NSStoryboardSegue
*/

if (! function_exists('ns_storyboardsegue_create')) {
    function ns_storyboardsegue_create(string $identifier, int $sourceControllerPtr, int $destinationControllerPtr): int
    {
        return NSStoryboardSegue::create($identifier, $sourceControllerPtr, $destinationControllerPtr);
    }
}

if (! function_exists('ns_storyboardsegue_wrap')) {
    function ns_storyboardsegue_wrap(int $nsStoryboardSeguePtr): int
    {
        return NSStoryboardSegue::wrap($nsStoryboardSeguePtr);
    }
}

if (! function_exists('ns_storyboardsegue_destroy')) {
    function ns_storyboardsegue_destroy(int $segue): void
    {
        NSStoryboardSegue::destroy($segue);
    }
}

if (! function_exists('ns_storyboardsegue_nsstoryboardsegue')) {
    function ns_storyboardsegue_nsstoryboardsegue(int $segue): int
    {
        return NSStoryboardSegue::nsStoryboardSegue($segue);
    }
}

if (! function_exists('ns_storyboardsegue_get_identifier')) {
    function ns_storyboardsegue_get_identifier(int $segue): string
    {
        return NSStoryboardSegue::getIdentifier($segue);
    }
}

if (! function_exists('ns_storyboardsegue_get_source_controller')) {
    function ns_storyboardsegue_get_source_controller(int $segue): int
    {
        return NSStoryboardSegue::getSourceController($segue);
    }
}

if (! function_exists('ns_storyboardsegue_get_destination_controller')) {
    function ns_storyboardsegue_get_destination_controller(int $segue): int
    {
        return NSStoryboardSegue::getDestinationController($segue);
    }
}

if (! function_exists('ns_storyboardsegue_perform')) {
    function ns_storyboardsegue_perform(int $segue): void
    {
        NSStoryboardSegue::perform($segue);
    }
}
