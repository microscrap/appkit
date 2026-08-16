<?php

use AppKit\NS\NSDictionaryController\NSDictionaryController;

/*
| NSDictionaryController helpers — 1:1 over AppKit\NS\NSDictionaryController\NSDictionaryController
*/

if (! function_exists('ns_dictionarycontroller_create')) {
    function ns_dictionarycontroller_create(): int
    {
        return NSDictionaryController::create();
    }
}

if (! function_exists('ns_dictionarycontroller_wrap')) {
    function ns_dictionarycontroller_wrap(int $nsDictionaryControllerPtr): int
    {
        return NSDictionaryController::wrap($nsDictionaryControllerPtr);
    }
}

if (! function_exists('ns_dictionarycontroller_destroy')) {
    function ns_dictionarycontroller_destroy(int $controller): void
    {
        NSDictionaryController::destroy($controller);
    }
}

if (! function_exists('ns_dictionarycontroller_nsdictionarycontroller')) {
    function ns_dictionarycontroller_nsdictionarycontroller(int $controller): int
    {
        return NSDictionaryController::nsDictionaryController($controller);
    }
}

if (! function_exists('ns_dictionarycontroller_discard_editing')) {
    function ns_dictionarycontroller_discard_editing(int $controller): void
    {
        NSDictionaryController::discardEditing($controller);
    }
}

if (! function_exists('ns_dictionarycontroller_commit_editing')) {
    function ns_dictionarycontroller_commit_editing(int $controller): bool
    {
        return NSDictionaryController::commitEditing($controller);
    }
}

if (! function_exists('ns_dictionarycontroller_is_editing')) {
    function ns_dictionarycontroller_is_editing(int $controller): bool
    {
        return NSDictionaryController::isEditing($controller);
    }
}

if (! function_exists('ns_dictionarycontroller_rearrange_objects')) {
    function ns_dictionarycontroller_rearrange_objects(int $controller): void
    {
        NSDictionaryController::rearrangeObjects($controller);
    }
}

if (! function_exists('ns_dictionarycontroller_set_automatically_rearranges_objects')) {
    function ns_dictionarycontroller_set_automatically_rearranges_objects(int $controller, bool $value): void
    {
        NSDictionaryController::setAutomaticallyRearrangesObjects($controller, $value);
    }
}

if (! function_exists('ns_dictionarycontroller_automatically_rearranges_objects')) {
    function ns_dictionarycontroller_automatically_rearranges_objects(int $controller): bool
    {
        return NSDictionaryController::automaticallyRearrangesObjects($controller);
    }
}

if (! function_exists('ns_dictionarycontroller_automatic_rearrangement_key_paths_count')) {
    function ns_dictionarycontroller_automatic_rearrangement_key_paths_count(int $controller): int
    {
        return NSDictionaryController::automaticRearrangementKeyPathsCount($controller);
    }
}

if (! function_exists('ns_dictionarycontroller_automatic_rearrangement_key_path_at')) {
    function ns_dictionarycontroller_automatic_rearrangement_key_path_at(int $controller, int $index): string
    {
        return NSDictionaryController::automaticRearrangementKeyPathAt($controller, $index);
    }
}

if (! function_exists('ns_dictionarycontroller_did_change_arrangement_criteria')) {
    function ns_dictionarycontroller_did_change_arrangement_criteria(int $controller): void
    {
        NSDictionaryController::didChangeArrangementCriteria($controller);
    }
}

if (! function_exists('ns_dictionarycontroller_set_clears_filter_predicate_on_insertion')) {
    function ns_dictionarycontroller_set_clears_filter_predicate_on_insertion(int $controller, bool $value): void
    {
        NSDictionaryController::setClearsFilterPredicateOnInsertion($controller, $value);
    }
}

if (! function_exists('ns_dictionarycontroller_clears_filter_predicate_on_insertion')) {
    function ns_dictionarycontroller_clears_filter_predicate_on_insertion(int $controller): bool
    {
        return NSDictionaryController::clearsFilterPredicateOnInsertion($controller);
    }
}

if (! function_exists('ns_dictionarycontroller_arranged_objects_count')) {
    function ns_dictionarycontroller_arranged_objects_count(int $controller): int
    {
        return NSDictionaryController::arrangedObjectsCount($controller);
    }
}

if (! function_exists('ns_dictionarycontroller_arranged_object_at')) {
    function ns_dictionarycontroller_arranged_object_at(int $controller, int $index): int
    {
        return NSDictionaryController::arrangedObjectAt($controller, $index);
    }
}

if (! function_exists('ns_dictionarycontroller_set_avoids_empty_selection')) {
    function ns_dictionarycontroller_set_avoids_empty_selection(int $controller, bool $value): void
    {
        NSDictionaryController::setAvoidsEmptySelection($controller, $value);
    }
}

if (! function_exists('ns_dictionarycontroller_avoids_empty_selection')) {
    function ns_dictionarycontroller_avoids_empty_selection(int $controller): bool
    {
        return NSDictionaryController::avoidsEmptySelection($controller);
    }
}

if (! function_exists('ns_dictionarycontroller_set_preserves_selection')) {
    function ns_dictionarycontroller_set_preserves_selection(int $controller, bool $value): void
    {
        NSDictionaryController::setPreservesSelection($controller, $value);
    }
}

if (! function_exists('ns_dictionarycontroller_preserves_selection')) {
    function ns_dictionarycontroller_preserves_selection(int $controller): bool
    {
        return NSDictionaryController::preservesSelection($controller);
    }
}

if (! function_exists('ns_dictionarycontroller_set_selects_inserted_objects')) {
    function ns_dictionarycontroller_set_selects_inserted_objects(int $controller, bool $value): void
    {
        NSDictionaryController::setSelectsInsertedObjects($controller, $value);
    }
}

if (! function_exists('ns_dictionarycontroller_selects_inserted_objects')) {
    function ns_dictionarycontroller_selects_inserted_objects(int $controller): bool
    {
        return NSDictionaryController::selectsInsertedObjects($controller);
    }
}

if (! function_exists('ns_dictionarycontroller_set_always_uses_multiple_values_marker')) {
    function ns_dictionarycontroller_set_always_uses_multiple_values_marker(int $controller, bool $value): void
    {
        NSDictionaryController::setAlwaysUsesMultipleValuesMarker($controller, $value);
    }
}

if (! function_exists('ns_dictionarycontroller_always_uses_multiple_values_marker')) {
    function ns_dictionarycontroller_always_uses_multiple_values_marker(int $controller): bool
    {
        return NSDictionaryController::alwaysUsesMultipleValuesMarker($controller);
    }
}

if (! function_exists('ns_dictionarycontroller_set_selection_index')) {
    function ns_dictionarycontroller_set_selection_index(int $controller, int $index): bool
    {
        return NSDictionaryController::setSelectionIndex($controller, $index);
    }
}

if (! function_exists('ns_dictionarycontroller_selection_index')) {
    function ns_dictionarycontroller_selection_index(int $controller): int
    {
        return NSDictionaryController::selectionIndex($controller);
    }
}

if (! function_exists('ns_dictionarycontroller_set_selection_indexes')) {
    function ns_dictionarycontroller_set_selection_indexes(int $controller, array $indexes): bool
    {
        return NSDictionaryController::setSelectionIndexes($controller, $indexes);
    }
}

if (! function_exists('ns_dictionarycontroller_selection_indexes_count')) {
    function ns_dictionarycontroller_selection_indexes_count(int $controller): int
    {
        return NSDictionaryController::selectionIndexesCount($controller);
    }
}

if (! function_exists('ns_dictionarycontroller_selection_index_at_ordinal')) {
    function ns_dictionarycontroller_selection_index_at_ordinal(int $controller, int $ordinal): int
    {
        return NSDictionaryController::selectionIndexAtOrdinal($controller, $ordinal);
    }
}

if (! function_exists('ns_dictionarycontroller_can_insert')) {
    function ns_dictionarycontroller_can_insert(int $controller): bool
    {
        return NSDictionaryController::canInsert($controller);
    }
}

if (! function_exists('ns_dictionarycontroller_can_select_next')) {
    function ns_dictionarycontroller_can_select_next(int $controller): bool
    {
        return NSDictionaryController::canSelectNext($controller);
    }
}

if (! function_exists('ns_dictionarycontroller_can_select_previous')) {
    function ns_dictionarycontroller_can_select_previous(int $controller): bool
    {
        return NSDictionaryController::canSelectPrevious($controller);
    }
}

if (! function_exists('ns_dictionarycontroller_insert_object_at_arranged_object_index')) {
    function ns_dictionarycontroller_insert_object_at_arranged_object_index(int $controller, int $objectPtr, int $index): void
    {
        NSDictionaryController::insertObjectAtArrangedObjectIndex($controller, $objectPtr, $index);
    }
}

if (! function_exists('ns_dictionarycontroller_remove_object_at_arranged_object_index')) {
    function ns_dictionarycontroller_remove_object_at_arranged_object_index(int $controller, int $index): void
    {
        NSDictionaryController::removeObjectAtArrangedObjectIndex($controller, $index);
    }
}

if (! function_exists('ns_dictionarycontroller_add_object')) {
    function ns_dictionarycontroller_add_object(int $controller, int $objectPtr): void
    {
        NSDictionaryController::addObject($controller, $objectPtr);
    }
}

if (! function_exists('ns_dictionarycontroller_remove_object')) {
    function ns_dictionarycontroller_remove_object(int $controller, int $objectPtr): void
    {
        NSDictionaryController::removeObject($controller, $objectPtr);
    }
}

if (! function_exists('ns_dictionarycontroller_set_content')) {
    function ns_dictionarycontroller_set_content(int $controller, int $contentPtr): void
    {
        NSDictionaryController::setContent($controller, $contentPtr);
    }
}

if (! function_exists('ns_dictionarycontroller_content')) {
    function ns_dictionarycontroller_content(int $controller): int
    {
        return NSDictionaryController::content($controller);
    }
}

if (! function_exists('ns_dictionarycontroller_set_editable')) {
    function ns_dictionarycontroller_set_editable(int $controller, bool $value): void
    {
        NSDictionaryController::setEditable($controller, $value);
    }
}

if (! function_exists('ns_dictionarycontroller_is_editable')) {
    function ns_dictionarycontroller_is_editable(int $controller): bool
    {
        return NSDictionaryController::isEditable($controller);
    }
}

if (! function_exists('ns_dictionarycontroller_can_add')) {
    function ns_dictionarycontroller_can_add(int $controller): bool
    {
        return NSDictionaryController::canAdd($controller);
    }
}

if (! function_exists('ns_dictionarycontroller_can_remove')) {
    function ns_dictionarycontroller_can_remove(int $controller): bool
    {
        return NSDictionaryController::canRemove($controller);
    }
}

if (! function_exists('ns_dictionarycontroller_prepare_content')) {
    function ns_dictionarycontroller_prepare_content(int $controller): void
    {
        NSDictionaryController::prepareContent($controller);
    }
}

if (! function_exists('ns_dictionarycontroller_new_object')) {
    function ns_dictionarycontroller_new_object(int $controller): int
    {
        return NSDictionaryController::newObject($controller);
    }
}

if (! function_exists('ns_dictionarycontroller_selected_objects_count')) {
    function ns_dictionarycontroller_selected_objects_count(int $controller): int
    {
        return NSDictionaryController::selectedObjectsCount($controller);
    }
}

if (! function_exists('ns_dictionarycontroller_selected_object_at')) {
    function ns_dictionarycontroller_selected_object_at(int $controller, int $index): int
    {
        return NSDictionaryController::selectedObjectAt($controller, $index);
    }
}

if (! function_exists('ns_dictionarycontroller_set_initial_key')) {
    function ns_dictionarycontroller_set_initial_key(int $controller, string $key): void
    {
        NSDictionaryController::setInitialKey($controller, $key);
    }
}

if (! function_exists('ns_dictionarycontroller_initial_key')) {
    function ns_dictionarycontroller_initial_key(int $controller): string
    {
        return NSDictionaryController::initialKey($controller);
    }
}

if (! function_exists('ns_dictionarycontroller_set_initial_value')) {
    function ns_dictionarycontroller_set_initial_value(int $controller, int $valuePtr): void
    {
        NSDictionaryController::setInitialValue($controller, $valuePtr);
    }
}

if (! function_exists('ns_dictionarycontroller_initial_value')) {
    function ns_dictionarycontroller_initial_value(int $controller): int
    {
        return NSDictionaryController::initialValue($controller);
    }
}

if (! function_exists('ns_dictionarycontroller_set_included_keys')) {
    function ns_dictionarycontroller_set_included_keys(int $controller, array $keys): void
    {
        NSDictionaryController::setIncludedKeys($controller, $keys);
    }
}

if (! function_exists('ns_dictionarycontroller_included_keys_count')) {
    function ns_dictionarycontroller_included_keys_count(int $controller): int
    {
        return NSDictionaryController::includedKeysCount($controller);
    }
}

if (! function_exists('ns_dictionarycontroller_included_key_at')) {
    function ns_dictionarycontroller_included_key_at(int $controller, int $index): string
    {
        return NSDictionaryController::includedKeyAt($controller, $index);
    }
}

if (! function_exists('ns_dictionarycontroller_set_excluded_keys')) {
    function ns_dictionarycontroller_set_excluded_keys(int $controller, array $keys): void
    {
        NSDictionaryController::setExcludedKeys($controller, $keys);
    }
}

if (! function_exists('ns_dictionarycontroller_excluded_keys_count')) {
    function ns_dictionarycontroller_excluded_keys_count(int $controller): int
    {
        return NSDictionaryController::excludedKeysCount($controller);
    }
}

if (! function_exists('ns_dictionarycontroller_excluded_key_at')) {
    function ns_dictionarycontroller_excluded_key_at(int $controller, int $index): string
    {
        return NSDictionaryController::excludedKeyAt($controller, $index);
    }
}

if (! function_exists('ns_dictionarycontroller_set_localized_key_dictionary')) {
    function ns_dictionarycontroller_set_localized_key_dictionary(int $controller, int $dictionaryHandle): void
    {
        NSDictionaryController::setLocalizedKeyDictionary($controller, $dictionaryHandle);
    }
}

if (! function_exists('ns_dictionarycontroller_localized_key_dictionary')) {
    function ns_dictionarycontroller_localized_key_dictionary(int $controller): int
    {
        return NSDictionaryController::localizedKeyDictionary($controller);
    }
}

if (! function_exists('ns_dictionarycontroller_set_localized_key_table')) {
    function ns_dictionarycontroller_set_localized_key_table(int $controller, string $table): void
    {
        NSDictionaryController::setLocalizedKeyTable($controller, $table);
    }
}

if (! function_exists('ns_dictionarycontroller_localized_key_table')) {
    function ns_dictionarycontroller_localized_key_table(int $controller): string
    {
        return NSDictionaryController::localizedKeyTable($controller);
    }
}
