<?php

use AppKit\NS\NSUserDefaultsController\NSUserDefaultsController;

/*
| NSUserDefaultsController helpers — 1:1 over AppKit\NS\NSUserDefaultsController\NSUserDefaultsController
*/

if (! function_exists('ns_userdefaultscontroller_shared')) {
    function ns_userdefaultscontroller_shared(): int
    {
        return NSUserDefaultsController::shared();
    }
}

if (! function_exists('ns_userdefaultscontroller_create')) {
    function ns_userdefaultscontroller_create(): int
    {
        return NSUserDefaultsController::create();
    }
}

if (! function_exists('ns_userdefaultscontroller_create_with_initial_values')) {
    function ns_userdefaultscontroller_create_with_initial_values(int $dictionaryHandle): int
    {
        return NSUserDefaultsController::createWithInitialValues($dictionaryHandle);
    }
}

if (! function_exists('ns_userdefaultscontroller_wrap')) {
    function ns_userdefaultscontroller_wrap(int $nsUserDefaultsControllerPtr): int
    {
        return NSUserDefaultsController::wrap($nsUserDefaultsControllerPtr);
    }
}

if (! function_exists('ns_userdefaultscontroller_destroy')) {
    function ns_userdefaultscontroller_destroy(int $controller): void
    {
        NSUserDefaultsController::destroy($controller);
    }
}

if (! function_exists('ns_userdefaultscontroller_nsuserdefaultscontroller')) {
    function ns_userdefaultscontroller_nsuserdefaultscontroller(int $controller): int
    {
        return NSUserDefaultsController::nsUserDefaultsController($controller);
    }
}

if (! function_exists('ns_userdefaultscontroller_discard_editing')) {
    function ns_userdefaultscontroller_discard_editing(int $controller): void
    {
        NSUserDefaultsController::discardEditing($controller);
    }
}

if (! function_exists('ns_userdefaultscontroller_commit_editing')) {
    function ns_userdefaultscontroller_commit_editing(int $controller): bool
    {
        return NSUserDefaultsController::commitEditing($controller);
    }
}

if (! function_exists('ns_userdefaultscontroller_is_editing')) {
    function ns_userdefaultscontroller_is_editing(int $controller): bool
    {
        return NSUserDefaultsController::isEditing($controller);
    }
}

if (! function_exists('ns_userdefaultscontroller_defaults')) {
    function ns_userdefaultscontroller_defaults(int $controller): int
    {
        return NSUserDefaultsController::defaults($controller);
    }
}

if (! function_exists('ns_userdefaultscontroller_set_initial_values')) {
    function ns_userdefaultscontroller_set_initial_values(int $controller, int $dictionaryHandle): void
    {
        NSUserDefaultsController::setInitialValues($controller, $dictionaryHandle);
    }
}

if (! function_exists('ns_userdefaultscontroller_initial_values')) {
    function ns_userdefaultscontroller_initial_values(int $controller): int
    {
        return NSUserDefaultsController::initialValues($controller);
    }
}

if (! function_exists('ns_userdefaultscontroller_set_applies_immediately')) {
    function ns_userdefaultscontroller_set_applies_immediately(int $controller, bool $value): void
    {
        NSUserDefaultsController::setAppliesImmediately($controller, $value);
    }
}

if (! function_exists('ns_userdefaultscontroller_applies_immediately')) {
    function ns_userdefaultscontroller_applies_immediately(int $controller): bool
    {
        return NSUserDefaultsController::appliesImmediately($controller);
    }
}

if (! function_exists('ns_userdefaultscontroller_has_unapplied_changes')) {
    function ns_userdefaultscontroller_has_unapplied_changes(int $controller): bool
    {
        return NSUserDefaultsController::hasUnappliedChanges($controller);
    }
}

if (! function_exists('ns_userdefaultscontroller_values')) {
    function ns_userdefaultscontroller_values(int $controller): int
    {
        return NSUserDefaultsController::values($controller);
    }
}

if (! function_exists('ns_userdefaultscontroller_revert')) {
    function ns_userdefaultscontroller_revert(int $controller): void
    {
        NSUserDefaultsController::revert($controller);
    }
}

if (! function_exists('ns_userdefaultscontroller_save')) {
    function ns_userdefaultscontroller_save(int $controller): void
    {
        NSUserDefaultsController::save($controller);
    }
}

if (! function_exists('ns_userdefaultscontroller_revert_to_initial_values')) {
    function ns_userdefaultscontroller_revert_to_initial_values(int $controller): void
    {
        NSUserDefaultsController::revertToInitialValues($controller);
    }
}
