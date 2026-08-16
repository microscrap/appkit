<?php

use AppKit\NS\NSController\NSController;

/*
| NSController helpers — 1:1 over AppKit\NS\NSController\NSController
*/

if (! function_exists('ns_controller_create')) {
    function ns_controller_create(): int
    {
        return NSController::create();
    }
}

if (! function_exists('ns_controller_wrap')) {
    function ns_controller_wrap(int $nsControllerPtr): int
    {
        return NSController::wrap($nsControllerPtr);
    }
}

if (! function_exists('ns_controller_destroy')) {
    function ns_controller_destroy(int $controller): void
    {
        NSController::destroy($controller);
    }
}

if (! function_exists('ns_controller_nscontroller')) {
    function ns_controller_nscontroller(int $controller): int
    {
        return NSController::nsController($controller);
    }
}

if (! function_exists('ns_controller_discard_editing')) {
    function ns_controller_discard_editing(int $controller): void
    {
        NSController::discardEditing($controller);
    }
}

if (! function_exists('ns_controller_commit_editing')) {
    function ns_controller_commit_editing(int $controller): bool
    {
        return NSController::commitEditing($controller);
    }
}

if (! function_exists('ns_controller_is_editing')) {
    function ns_controller_is_editing(int $controller): bool
    {
        return NSController::isEditing($controller);
    }
}
