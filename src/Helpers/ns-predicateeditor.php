<?php

use AppKit\NS\NSPredicateEditor\NSPredicateEditor;
use Microscrap\Bindings\AppKit\Enums\RuleEditorNestingMode;

/*
| NSPredicateEditor helpers — 1:1 over AppKit\\NS\\NSPredicateEditor\\NSPredicateEditor
*/

if (! function_exists('ns_predicateeditor_create')) {
    function ns_predicateeditor_create(int $x, int $y, int $width, int $height): int
    {
        return NSPredicateEditor::create($x, $y, $width, $height);
    }
}

if (! function_exists('ns_predicateeditor_destroy')) {
    function ns_predicateeditor_destroy(int $editor): void
    {
        NSPredicateEditor::destroy($editor);
    }
}

if (! function_exists('ns_predicateeditor_set_editable')) {
    function ns_predicateeditor_set_editable(int $editor, bool $flag): void
    {
        NSPredicateEditor::setEditable($editor, $flag);
    }
}

if (! function_exists('ns_predicateeditor_is_editable')) {
    function ns_predicateeditor_is_editable(int $editor): bool
    {
        return NSPredicateEditor::isEditable($editor);
    }
}

if (! function_exists('ns_predicateeditor_number_of_rows')) {
    function ns_predicateeditor_number_of_rows(int $editor): int
    {
        return NSPredicateEditor::numberOfRows($editor);
    }
}

if (! function_exists('ns_predicateeditor_add_row')) {
    function ns_predicateeditor_add_row(int $editor): void
    {
        NSPredicateEditor::addRow($editor);
    }
}

if (! function_exists('ns_predicateeditor_remove_row_at')) {
    function ns_predicateeditor_remove_row_at(int $editor, int $index): void
    {
        NSPredicateEditor::removeRowAt($editor, $index);
    }
}

if (! function_exists('ns_predicateeditor_set_nesting_mode')) {
    function ns_predicateeditor_set_nesting_mode(int $editor, RuleEditorNestingMode|int $mode): void
    {
        NSPredicateEditor::setNestingMode($editor, $mode instanceof RuleEditorNestingMode ? $mode->value : $mode);
    }
}

if (! function_exists('ns_predicateeditor_get_nesting_mode')) {
    function ns_predicateeditor_get_nesting_mode(int $editor): int
    {
        return NSPredicateEditor::getNestingMode($editor);
    }
}

if (! function_exists('ns_predicateeditor_set_can_remove_all_rows')) {
    function ns_predicateeditor_set_can_remove_all_rows(int $editor, bool $flag): void
    {
        NSPredicateEditor::setCanRemoveAllRows($editor, $flag);
    }
}

if (! function_exists('ns_predicateeditor_can_remove_all_rows')) {
    function ns_predicateeditor_can_remove_all_rows(int $editor): bool
    {
        return NSPredicateEditor::canRemoveAllRows($editor);
    }
}
