<?php

use AppKit\NS\NSTreeController\NSTreeController;

/*
| NSTreeController helpers — 1:1 over AppKit\NS\NSTreeController\NSTreeController
*/

if (! function_exists('ns_treecontroller_create')) {
    function ns_treecontroller_create(): int
    {
        return NSTreeController::create();
    }
}

if (! function_exists('ns_treecontroller_wrap')) {
    function ns_treecontroller_wrap(int $nsTreeControllerPtr): int
    {
        return NSTreeController::wrap($nsTreeControllerPtr);
    }
}

if (! function_exists('ns_treecontroller_destroy')) {
    function ns_treecontroller_destroy(int $controller): void
    {
        NSTreeController::destroy($controller);
    }
}

if (! function_exists('ns_treecontroller_nstreecontroller')) {
    function ns_treecontroller_nstreecontroller(int $controller): int
    {
        return NSTreeController::nsTreeController($controller);
    }
}

if (! function_exists('ns_treecontroller_discard_editing')) {
    function ns_treecontroller_discard_editing(int $controller): void
    {
        NSTreeController::discardEditing($controller);
    }
}

if (! function_exists('ns_treecontroller_commit_editing')) {
    function ns_treecontroller_commit_editing(int $controller): bool
    {
        return NSTreeController::commitEditing($controller);
    }
}

if (! function_exists('ns_treecontroller_is_editing')) {
    function ns_treecontroller_is_editing(int $controller): bool
    {
        return NSTreeController::isEditing($controller);
    }
}

if (! function_exists('ns_treecontroller_rearrange_objects')) {
    function ns_treecontroller_rearrange_objects(int $controller): void
    {
        NSTreeController::rearrangeObjects($controller);
    }
}

if (! function_exists('ns_treecontroller_arranged_objects_root_node')) {
    function ns_treecontroller_arranged_objects_root_node(int $controller): int
    {
        return NSTreeController::arrangedObjectsRootNode($controller);
    }
}

if (! function_exists('ns_treecontroller_set_children_key_path')) {
    function ns_treecontroller_set_children_key_path(int $controller, string $path): void
    {
        NSTreeController::setChildrenKeyPath($controller, $path);
    }
}

if (! function_exists('ns_treecontroller_children_key_path')) {
    function ns_treecontroller_children_key_path(int $controller): string
    {
        return NSTreeController::childrenKeyPath($controller);
    }
}

if (! function_exists('ns_treecontroller_set_count_key_path')) {
    function ns_treecontroller_set_count_key_path(int $controller, string $path): void
    {
        NSTreeController::setCountKeyPath($controller, $path);
    }
}

if (! function_exists('ns_treecontroller_count_key_path')) {
    function ns_treecontroller_count_key_path(int $controller): string
    {
        return NSTreeController::countKeyPath($controller);
    }
}

if (! function_exists('ns_treecontroller_set_leaf_key_path')) {
    function ns_treecontroller_set_leaf_key_path(int $controller, string $path): void
    {
        NSTreeController::setLeafKeyPath($controller, $path);
    }
}

if (! function_exists('ns_treecontroller_leaf_key_path')) {
    function ns_treecontroller_leaf_key_path(int $controller): string
    {
        return NSTreeController::leafKeyPath($controller);
    }
}

if (! function_exists('ns_treecontroller_set_content')) {
    function ns_treecontroller_set_content(int $controller, int $contentPtr): void
    {
        NSTreeController::setContent($controller, $contentPtr);
    }
}

if (! function_exists('ns_treecontroller_content')) {
    function ns_treecontroller_content(int $controller): int
    {
        return NSTreeController::content($controller);
    }
}

if (! function_exists('ns_treecontroller_can_insert')) {
    function ns_treecontroller_can_insert(int $controller): bool
    {
        return NSTreeController::canInsert($controller);
    }
}

if (! function_exists('ns_treecontroller_can_insert_child')) {
    function ns_treecontroller_can_insert_child(int $controller): bool
    {
        return NSTreeController::canInsertChild($controller);
    }
}

if (! function_exists('ns_treecontroller_can_add_child')) {
    function ns_treecontroller_can_add_child(int $controller): bool
    {
        return NSTreeController::canAddChild($controller);
    }
}

if (! function_exists('ns_treecontroller_set_avoids_empty_selection')) {
    function ns_treecontroller_set_avoids_empty_selection(int $controller, bool $value): void
    {
        NSTreeController::setAvoidsEmptySelection($controller, $value);
    }
}

if (! function_exists('ns_treecontroller_avoids_empty_selection')) {
    function ns_treecontroller_avoids_empty_selection(int $controller): bool
    {
        return NSTreeController::avoidsEmptySelection($controller);
    }
}

if (! function_exists('ns_treecontroller_set_preserves_selection')) {
    function ns_treecontroller_set_preserves_selection(int $controller, bool $value): void
    {
        NSTreeController::setPreservesSelection($controller, $value);
    }
}

if (! function_exists('ns_treecontroller_preserves_selection')) {
    function ns_treecontroller_preserves_selection(int $controller): bool
    {
        return NSTreeController::preservesSelection($controller);
    }
}

if (! function_exists('ns_treecontroller_set_selects_inserted_objects')) {
    function ns_treecontroller_set_selects_inserted_objects(int $controller, bool $value): void
    {
        NSTreeController::setSelectsInsertedObjects($controller, $value);
    }
}

if (! function_exists('ns_treecontroller_selects_inserted_objects')) {
    function ns_treecontroller_selects_inserted_objects(int $controller): bool
    {
        return NSTreeController::selectsInsertedObjects($controller);
    }
}

if (! function_exists('ns_treecontroller_set_always_uses_multiple_values_marker')) {
    function ns_treecontroller_set_always_uses_multiple_values_marker(int $controller, bool $value): void
    {
        NSTreeController::setAlwaysUsesMultipleValuesMarker($controller, $value);
    }
}

if (! function_exists('ns_treecontroller_always_uses_multiple_values_marker')) {
    function ns_treecontroller_always_uses_multiple_values_marker(int $controller): bool
    {
        return NSTreeController::alwaysUsesMultipleValuesMarker($controller);
    }
}

if (! function_exists('ns_treecontroller_selected_objects_count')) {
    function ns_treecontroller_selected_objects_count(int $controller): int
    {
        return NSTreeController::selectedObjectsCount($controller);
    }
}

if (! function_exists('ns_treecontroller_selected_object_at')) {
    function ns_treecontroller_selected_object_at(int $controller, int $index): int
    {
        return NSTreeController::selectedObjectAt($controller, $index);
    }
}

if (! function_exists('ns_treecontroller_selected_nodes_count')) {
    function ns_treecontroller_selected_nodes_count(int $controller): int
    {
        return NSTreeController::selectedNodesCount($controller);
    }
}

if (! function_exists('ns_treecontroller_selected_node_at')) {
    function ns_treecontroller_selected_node_at(int $controller, int $index): int
    {
        return NSTreeController::selectedNodeAt($controller, $index);
    }
}

if (! function_exists('ns_treecontroller_set_selection_index_path')) {
    function ns_treecontroller_set_selection_index_path(int $controller, array $indexes): bool
    {
        return NSTreeController::setSelectionIndexPath($controller, $indexes);
    }
}

if (! function_exists('ns_treecontroller_selection_index_path_length')) {
    function ns_treecontroller_selection_index_path_length(int $controller): int
    {
        return NSTreeController::selectionIndexPathLength($controller);
    }
}

if (! function_exists('ns_treecontroller_selection_index_path_component_at')) {
    function ns_treecontroller_selection_index_path_component_at(int $controller, int $index): int
    {
        return NSTreeController::selectionIndexPathComponentAt($controller, $index);
    }
}

if (! function_exists('ns_treecontroller_insert_object_at_arranged_object_index_path')) {
    function ns_treecontroller_insert_object_at_arranged_object_index_path(int $controller, int $objectPtr, array $indexes): void
    {
        NSTreeController::insertObjectAtArrangedObjectIndexPath($controller, $objectPtr, $indexes);
    }
}

if (! function_exists('ns_treecontroller_remove_object_at_arranged_object_index_path')) {
    function ns_treecontroller_remove_object_at_arranged_object_index_path(int $controller, array $indexes): void
    {
        NSTreeController::removeObjectAtArrangedObjectIndexPath($controller, $indexes);
    }
}
