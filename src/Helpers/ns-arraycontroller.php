<?php

use AppKit\NS\NSArrayController\NSArrayController;

/*
| NSArrayController helpers — 1:1 over AppKit\NS\NSArrayController\NSArrayController
*/

if (! function_exists('ns_arraycontroller_create')) {
    function ns_arraycontroller_create(): int
    {
        return NSArrayController::create();
    }
}

if (! function_exists('ns_arraycontroller_wrap')) {
    function ns_arraycontroller_wrap(int $nsArrayControllerPtr): int
    {
        return NSArrayController::wrap($nsArrayControllerPtr);
    }
}

if (! function_exists('ns_arraycontroller_destroy')) {
    function ns_arraycontroller_destroy(int $controller): void
    {
        NSArrayController::destroy($controller);
    }
}

if (! function_exists('ns_arraycontroller_nsarraycontroller')) {
    function ns_arraycontroller_nsarraycontroller(int $controller): int
    {
        return NSArrayController::nsArrayController($controller);
    }
}

if (! function_exists('ns_arraycontroller_discard_editing')) {
    function ns_arraycontroller_discard_editing(int $controller): void
    {
        NSArrayController::discardEditing($controller);
    }
}

if (! function_exists('ns_arraycontroller_commit_editing')) {
    function ns_arraycontroller_commit_editing(int $controller): bool
    {
        return NSArrayController::commitEditing($controller);
    }
}

if (! function_exists('ns_arraycontroller_is_editing')) {
    function ns_arraycontroller_is_editing(int $controller): bool
    {
        return NSArrayController::isEditing($controller);
    }
}

if (! function_exists('ns_arraycontroller_set_content')) {
    function ns_arraycontroller_set_content(int $controller, int $contentPtr): void
    {
        NSArrayController::setContent($controller, $contentPtr);
    }
}

if (! function_exists('ns_arraycontroller_content')) {
    function ns_arraycontroller_content(int $controller): int
    {
        return NSArrayController::content($controller);
    }
}

if (! function_exists('ns_arraycontroller_set_editable')) {
    function ns_arraycontroller_set_editable(int $controller, bool $value): void
    {
        NSArrayController::setEditable($controller, $value);
    }
}

if (! function_exists('ns_arraycontroller_is_editable')) {
    function ns_arraycontroller_is_editable(int $controller): bool
    {
        return NSArrayController::isEditable($controller);
    }
}

if (! function_exists('ns_arraycontroller_can_add')) {
    function ns_arraycontroller_can_add(int $controller): bool
    {
        return NSArrayController::canAdd($controller);
    }
}

if (! function_exists('ns_arraycontroller_can_remove')) {
    function ns_arraycontroller_can_remove(int $controller): bool
    {
        return NSArrayController::canRemove($controller);
    }
}

if (! function_exists('ns_arraycontroller_prepare_content')) {
    function ns_arraycontroller_prepare_content(int $controller): void
    {
        NSArrayController::prepareContent($controller);
    }
}

if (! function_exists('ns_arraycontroller_new_object')) {
    function ns_arraycontroller_new_object(int $controller): int
    {
        return NSArrayController::newObject($controller);
    }
}

if (! function_exists('ns_arraycontroller_selected_objects_count')) {
    function ns_arraycontroller_selected_objects_count(int $controller): int
    {
        return NSArrayController::selectedObjectsCount($controller);
    }
}

if (! function_exists('ns_arraycontroller_selected_object_at')) {
    function ns_arraycontroller_selected_object_at(int $controller, int $index): int
    {
        return NSArrayController::selectedObjectAt($controller, $index);
    }
}

if (! function_exists('ns_arraycontroller_rearrange_objects')) {
    function ns_arraycontroller_rearrange_objects(int $controller): void
    {
        NSArrayController::rearrangeObjects($controller);
    }
}

if (! function_exists('ns_arraycontroller_set_automatically_rearranges_objects')) {
    function ns_arraycontroller_set_automatically_rearranges_objects(int $controller, bool $value): void
    {
        NSArrayController::setAutomaticallyRearrangesObjects($controller, $value);
    }
}

if (! function_exists('ns_arraycontroller_automatically_rearranges_objects')) {
    function ns_arraycontroller_automatically_rearranges_objects(int $controller): bool
    {
        return NSArrayController::automaticallyRearrangesObjects($controller);
    }
}

if (! function_exists('ns_arraycontroller_automatic_rearrangement_key_paths_count')) {
    function ns_arraycontroller_automatic_rearrangement_key_paths_count(int $controller): int
    {
        return NSArrayController::automaticRearrangementKeyPathsCount($controller);
    }
}

if (! function_exists('ns_arraycontroller_automatic_rearrangement_key_path_at')) {
    function ns_arraycontroller_automatic_rearrangement_key_path_at(int $controller, int $index): string
    {
        return NSArrayController::automaticRearrangementKeyPathAt($controller, $index);
    }
}

if (! function_exists('ns_arraycontroller_did_change_arrangement_criteria')) {
    function ns_arraycontroller_did_change_arrangement_criteria(int $controller): void
    {
        NSArrayController::didChangeArrangementCriteria($controller);
    }
}

if (! function_exists('ns_arraycontroller_set_clears_filter_predicate_on_insertion')) {
    function ns_arraycontroller_set_clears_filter_predicate_on_insertion(int $controller, bool $value): void
    {
        NSArrayController::setClearsFilterPredicateOnInsertion($controller, $value);
    }
}

if (! function_exists('ns_arraycontroller_clears_filter_predicate_on_insertion')) {
    function ns_arraycontroller_clears_filter_predicate_on_insertion(int $controller): bool
    {
        return NSArrayController::clearsFilterPredicateOnInsertion($controller);
    }
}

if (! function_exists('ns_arraycontroller_arranged_objects_count')) {
    function ns_arraycontroller_arranged_objects_count(int $controller): int
    {
        return NSArrayController::arrangedObjectsCount($controller);
    }
}

if (! function_exists('ns_arraycontroller_arranged_object_at')) {
    function ns_arraycontroller_arranged_object_at(int $controller, int $index): int
    {
        return NSArrayController::arrangedObjectAt($controller, $index);
    }
}

if (! function_exists('ns_arraycontroller_set_avoids_empty_selection')) {
    function ns_arraycontroller_set_avoids_empty_selection(int $controller, bool $value): void
    {
        NSArrayController::setAvoidsEmptySelection($controller, $value);
    }
}

if (! function_exists('ns_arraycontroller_avoids_empty_selection')) {
    function ns_arraycontroller_avoids_empty_selection(int $controller): bool
    {
        return NSArrayController::avoidsEmptySelection($controller);
    }
}

if (! function_exists('ns_arraycontroller_set_preserves_selection')) {
    function ns_arraycontroller_set_preserves_selection(int $controller, bool $value): void
    {
        NSArrayController::setPreservesSelection($controller, $value);
    }
}

if (! function_exists('ns_arraycontroller_preserves_selection')) {
    function ns_arraycontroller_preserves_selection(int $controller): bool
    {
        return NSArrayController::preservesSelection($controller);
    }
}

if (! function_exists('ns_arraycontroller_set_selects_inserted_objects')) {
    function ns_arraycontroller_set_selects_inserted_objects(int $controller, bool $value): void
    {
        NSArrayController::setSelectsInsertedObjects($controller, $value);
    }
}

if (! function_exists('ns_arraycontroller_selects_inserted_objects')) {
    function ns_arraycontroller_selects_inserted_objects(int $controller): bool
    {
        return NSArrayController::selectsInsertedObjects($controller);
    }
}

if (! function_exists('ns_arraycontroller_set_always_uses_multiple_values_marker')) {
    function ns_arraycontroller_set_always_uses_multiple_values_marker(int $controller, bool $value): void
    {
        NSArrayController::setAlwaysUsesMultipleValuesMarker($controller, $value);
    }
}

if (! function_exists('ns_arraycontroller_always_uses_multiple_values_marker')) {
    function ns_arraycontroller_always_uses_multiple_values_marker(int $controller): bool
    {
        return NSArrayController::alwaysUsesMultipleValuesMarker($controller);
    }
}

if (! function_exists('ns_arraycontroller_set_selection_index')) {
    function ns_arraycontroller_set_selection_index(int $controller, int $index): bool
    {
        return NSArrayController::setSelectionIndex($controller, $index);
    }
}

if (! function_exists('ns_arraycontroller_selection_index')) {
    function ns_arraycontroller_selection_index(int $controller): int
    {
        return NSArrayController::selectionIndex($controller);
    }
}

if (! function_exists('ns_arraycontroller_set_selection_indexes')) {
    function ns_arraycontroller_set_selection_indexes(int $controller, array $indexes): bool
    {
        return NSArrayController::setSelectionIndexes($controller, $indexes);
    }
}

if (! function_exists('ns_arraycontroller_selection_indexes_count')) {
    function ns_arraycontroller_selection_indexes_count(int $controller): int
    {
        return NSArrayController::selectionIndexesCount($controller);
    }
}

if (! function_exists('ns_arraycontroller_selection_index_at_ordinal')) {
    function ns_arraycontroller_selection_index_at_ordinal(int $controller, int $ordinal): int
    {
        return NSArrayController::selectionIndexAtOrdinal($controller, $ordinal);
    }
}

if (! function_exists('ns_arraycontroller_can_insert')) {
    function ns_arraycontroller_can_insert(int $controller): bool
    {
        return NSArrayController::canInsert($controller);
    }
}

if (! function_exists('ns_arraycontroller_can_select_next')) {
    function ns_arraycontroller_can_select_next(int $controller): bool
    {
        return NSArrayController::canSelectNext($controller);
    }
}

if (! function_exists('ns_arraycontroller_can_select_previous')) {
    function ns_arraycontroller_can_select_previous(int $controller): bool
    {
        return NSArrayController::canSelectPrevious($controller);
    }
}

if (! function_exists('ns_arraycontroller_insert_object_at_arranged_object_index')) {
    function ns_arraycontroller_insert_object_at_arranged_object_index(int $controller, int $objectPtr, int $index): void
    {
        NSArrayController::insertObjectAtArrangedObjectIndex($controller, $objectPtr, $index);
    }
}

if (! function_exists('ns_arraycontroller_remove_object_at_arranged_object_index')) {
    function ns_arraycontroller_remove_object_at_arranged_object_index(int $controller, int $index): void
    {
        NSArrayController::removeObjectAtArrangedObjectIndex($controller, $index);
    }
}

if (! function_exists('ns_arraycontroller_add_object')) {
    function ns_arraycontroller_add_object(int $controller, int $objectPtr): void
    {
        NSArrayController::addObject($controller, $objectPtr);
    }
}

if (! function_exists('ns_arraycontroller_remove_object')) {
    function ns_arraycontroller_remove_object(int $controller, int $objectPtr): void
    {
        NSArrayController::removeObject($controller, $objectPtr);
    }
}
