<?php

use AppKit\NS\NSStoryboard\NSStoryboard;

/*
| NSStoryboard helpers — 1:1 over AppKit\NS\NSStoryboard\NSStoryboard
*/

if (! function_exists('ns_storyboard_main')) {
    function ns_storyboard_main(): int
    {
        return NSStoryboard::main();
    }
}

if (! function_exists('ns_storyboard_with_name')) {
    function ns_storyboard_with_name(string $name, string $bundlePath = ''): int
    {
        return NSStoryboard::withName($name, $bundlePath);
    }
}

if (! function_exists('ns_storyboard_wrap')) {
    function ns_storyboard_wrap(int $nsStoryboardPtr): int
    {
        return NSStoryboard::wrap($nsStoryboardPtr);
    }
}

if (! function_exists('ns_storyboard_destroy')) {
    function ns_storyboard_destroy(int $storyboard): void
    {
        NSStoryboard::destroy($storyboard);
    }
}

if (! function_exists('ns_storyboard_nsstoryboard')) {
    function ns_storyboard_nsstoryboard(int $storyboard): int
    {
        return NSStoryboard::nsStoryboard($storyboard);
    }
}

if (! function_exists('ns_storyboard_instantiate_initial_controller')) {
    function ns_storyboard_instantiate_initial_controller(int $storyboard): int
    {
        return NSStoryboard::instantiateInitialController($storyboard);
    }
}

if (! function_exists('ns_storyboard_instantiate_controller_with_identifier')) {
    function ns_storyboard_instantiate_controller_with_identifier(int $storyboard, string $identifier): int
    {
        return NSStoryboard::instantiateControllerWithIdentifier($storyboard, $identifier);
    }
}
