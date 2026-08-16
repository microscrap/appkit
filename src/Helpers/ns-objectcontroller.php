<?php

use AppKit\NS\NSObjectController\NSObjectController;

/*
| NSObjectController helpers — 1:1 over AppKit\NS\NSObjectController\NSObjectController
*/

if (! function_exists('ns_objectcontroller_create')) {
    function ns_objectcontroller_create(): int
    {
        return NSObjectController::create();
    }
}

if (! function_exists('ns_objectcontroller_create_with_content')) {
    function ns_objectcontroller_create_with_content(int $contentPtr): int
    {
        return NSObjectController::createWithContent($contentPtr);
    }
}

if (! function_exists('ns_objectcontroller_wrap')) {
    function ns_objectcontroller_wrap(int $nsObjectControllerPtr): int
    {
        return NSObjectController::wrap($nsObjectControllerPtr);
    }
}

if (! function_exists('ns_objectcontroller_destroy')) {
    function ns_objectcontroller_destroy(int $controller): void
    {
        NSObjectController::destroy($controller);
    }
}

if (! function_exists('ns_objectcontroller_nsobjectcontroller')) {
    function ns_objectcontroller_nsobjectcontroller(int $controller): int
    {
        return NSObjectController::nsObjectController($controller);
    }
}

if (! function_exists('ns_objectcontroller_discard_editing')) {
    function ns_objectcontroller_discard_editing(int $controller): void
    {
        NSObjectController::discardEditing($controller);
    }
}

if (! function_exists('ns_objectcontroller_commit_editing')) {
    function ns_objectcontroller_commit_editing(int $controller): bool
    {
        return NSObjectController::commitEditing($controller);
    }
}

if (! function_exists('ns_objectcontroller_is_editing')) {
    function ns_objectcontroller_is_editing(int $controller): bool
    {
        return NSObjectController::isEditing($controller);
    }
}

if (! function_exists('ns_objectcontroller_set_content')) {
    function ns_objectcontroller_set_content(int $controller, int $contentPtr): void
    {
        NSObjectController::setContent($controller, $contentPtr);
    }
}

if (! function_exists('ns_objectcontroller_content')) {
    function ns_objectcontroller_content(int $controller): int
    {
        return NSObjectController::content($controller);
    }
}

if (! function_exists('ns_objectcontroller_selection')) {
    function ns_objectcontroller_selection(int $controller): int
    {
        return NSObjectController::selection($controller);
    }
}

if (! function_exists('ns_objectcontroller_selected_objects_count')) {
    function ns_objectcontroller_selected_objects_count(int $controller): int
    {
        return NSObjectController::selectedObjectsCount($controller);
    }
}

if (! function_exists('ns_objectcontroller_selected_object_at')) {
    function ns_objectcontroller_selected_object_at(int $controller, int $index): int
    {
        return NSObjectController::selectedObjectAt($controller, $index);
    }
}

if (! function_exists('ns_objectcontroller_set_automatically_prepares_content')) {
    function ns_objectcontroller_set_automatically_prepares_content(int $controller, bool $value): void
    {
        NSObjectController::setAutomaticallyPreparesContent($controller, $value);
    }
}

if (! function_exists('ns_objectcontroller_automatically_prepares_content')) {
    function ns_objectcontroller_automatically_prepares_content(int $controller): bool
    {
        return NSObjectController::automaticallyPreparesContent($controller);
    }
}

if (! function_exists('ns_objectcontroller_prepare_content')) {
    function ns_objectcontroller_prepare_content(int $controller): void
    {
        NSObjectController::prepareContent($controller);
    }
}

if (! function_exists('ns_objectcontroller_set_object_class_name')) {
    function ns_objectcontroller_set_object_class_name(int $controller, string $className): void
    {
        NSObjectController::setObjectClassName($controller, $className);
    }
}

if (! function_exists('ns_objectcontroller_object_class_name')) {
    function ns_objectcontroller_object_class_name(int $controller): string
    {
        return NSObjectController::objectClassName($controller);
    }
}

if (! function_exists('ns_objectcontroller_new_object')) {
    function ns_objectcontroller_new_object(int $controller): int
    {
        return NSObjectController::newObject($controller);
    }
}

if (! function_exists('ns_objectcontroller_add_object')) {
    function ns_objectcontroller_add_object(int $controller, int $objectPtr): void
    {
        NSObjectController::addObject($controller, $objectPtr);
    }
}

if (! function_exists('ns_objectcontroller_remove_object')) {
    function ns_objectcontroller_remove_object(int $controller, int $objectPtr): void
    {
        NSObjectController::removeObject($controller, $objectPtr);
    }
}

if (! function_exists('ns_objectcontroller_set_editable')) {
    function ns_objectcontroller_set_editable(int $controller, bool $value): void
    {
        NSObjectController::setEditable($controller, $value);
    }
}

if (! function_exists('ns_objectcontroller_is_editable')) {
    function ns_objectcontroller_is_editable(int $controller): bool
    {
        return NSObjectController::isEditable($controller);
    }
}

if (! function_exists('ns_objectcontroller_can_add')) {
    function ns_objectcontroller_can_add(int $controller): bool
    {
        return NSObjectController::canAdd($controller);
    }
}

if (! function_exists('ns_objectcontroller_can_remove')) {
    function ns_objectcontroller_can_remove(int $controller): bool
    {
        return NSObjectController::canRemove($controller);
    }
}
