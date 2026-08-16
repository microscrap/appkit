<?php

use AppKit\NS\NSPageController\NSPageController;

/*
| NSPageController helpers — 1:1 over AppKit\NS\NSPageController\NSPageController
*/

if (! function_exists('ns_pagecontroller_create')) {
    function ns_pagecontroller_create(): int
    {
        return NSPageController::create();
    }
}

if (! function_exists('ns_pagecontroller_wrap')) {
    function ns_pagecontroller_wrap(int $nsPageControllerPtr): int
    {
        return NSPageController::wrap($nsPageControllerPtr);
    }
}

if (! function_exists('ns_pagecontroller_destroy')) {
    function ns_pagecontroller_destroy(int $controller): void
    {
        NSPageController::destroy($controller);
    }
}

if (! function_exists('ns_pagecontroller_nspagecontroller')) {
    function ns_pagecontroller_nspagecontroller(int $controller): int
    {
        return NSPageController::nsPageController($controller);
    }
}

if (! function_exists('ns_pagecontroller_set_transition_style')) {
    function ns_pagecontroller_set_transition_style(int $controller, int $style): void
    {
        NSPageController::setTransitionStyle($controller, $style);
    }
}

if (! function_exists('ns_pagecontroller_get_transition_style')) {
    function ns_pagecontroller_get_transition_style(int $controller): int
    {
        return NSPageController::getTransitionStyle($controller);
    }
}

if (! function_exists('ns_pagecontroller_set_selected_index')) {
    function ns_pagecontroller_set_selected_index(int $controller, int $index): void
    {
        NSPageController::setSelectedIndex($controller, $index);
    }
}

if (! function_exists('ns_pagecontroller_get_selected_index')) {
    function ns_pagecontroller_get_selected_index(int $controller): int
    {
        return NSPageController::getSelectedIndex($controller);
    }
}

if (! function_exists('ns_pagecontroller_arranged_object_count')) {
    function ns_pagecontroller_arranged_object_count(int $controller): int
    {
        return NSPageController::arrangedObjectCount($controller);
    }
}

if (! function_exists('ns_pagecontroller_navigate_forward_to_object')) {
    function ns_pagecontroller_navigate_forward_to_object(int $controller, string $objectId): void
    {
        NSPageController::navigateForwardToObject($controller, $objectId);
    }
}

if (! function_exists('ns_pagecontroller_navigate_back')) {
    function ns_pagecontroller_navigate_back(int $controller): void
    {
        NSPageController::navigateBack($controller);
    }
}

if (! function_exists('ns_pagecontroller_navigate_forward')) {
    function ns_pagecontroller_navigate_forward(int $controller): void
    {
        NSPageController::navigateForward($controller);
    }
}

if (! function_exists('ns_pagecontroller_complete_transition')) {
    function ns_pagecontroller_complete_transition(int $controller): void
    {
        NSPageController::completeTransition($controller);
    }
}

if (! function_exists('ns_pagecontroller_selected_view_controller')) {
    function ns_pagecontroller_selected_view_controller(int $controller): int
    {
        return NSPageController::selectedViewController($controller);
    }
}
