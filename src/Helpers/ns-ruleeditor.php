<?php

use AppKit\NS\NSRuleEditor\NSRuleEditor;
use Microscrap\Bindings\AppKit\Enums\RuleEditorNestingMode;

/*
| NSRuleEditor helpers — 1:1 over AppKit\\NS\\NSRuleEditor\\NSRuleEditor
*/

if (! function_exists('ns_ruleeditor_create')) {
    function ns_ruleeditor_create(int $x, int $y, int $width, int $height): int
    {
        return NSRuleEditor::create($x, $y, $width, $height);
    }
}

if (! function_exists('ns_ruleeditor_destroy')) {
    function ns_ruleeditor_destroy(int $editor): void
    {
        NSRuleEditor::destroy($editor);
    }
}

if (! function_exists('ns_ruleeditor_set_editable')) {
    function ns_ruleeditor_set_editable(int $editor, bool $flag): void
    {
        NSRuleEditor::setEditable($editor, $flag);
    }
}

if (! function_exists('ns_ruleeditor_is_editable')) {
    function ns_ruleeditor_is_editable(int $editor): bool
    {
        return NSRuleEditor::isEditable($editor);
    }
}

if (! function_exists('ns_ruleeditor_number_of_rows')) {
    function ns_ruleeditor_number_of_rows(int $editor): int
    {
        return NSRuleEditor::numberOfRows($editor);
    }
}

if (! function_exists('ns_ruleeditor_add_row')) {
    function ns_ruleeditor_add_row(int $editor): void
    {
        NSRuleEditor::addRow($editor);
    }
}

if (! function_exists('ns_ruleeditor_remove_row_at')) {
    function ns_ruleeditor_remove_row_at(int $editor, int $index): void
    {
        NSRuleEditor::removeRowAt($editor, $index);
    }
}

if (! function_exists('ns_ruleeditor_set_nesting_mode')) {
    function ns_ruleeditor_set_nesting_mode(int $editor, RuleEditorNestingMode|int $mode): void
    {
        NSRuleEditor::setNestingMode($editor, $mode instanceof RuleEditorNestingMode ? $mode->value : $mode);
    }
}

if (! function_exists('ns_ruleeditor_get_nesting_mode')) {
    function ns_ruleeditor_get_nesting_mode(int $editor): int
    {
        return NSRuleEditor::getNestingMode($editor);
    }
}

if (! function_exists('ns_ruleeditor_set_can_remove_all_rows')) {
    function ns_ruleeditor_set_can_remove_all_rows(int $editor, bool $flag): void
    {
        NSRuleEditor::setCanRemoveAllRows($editor, $flag);
    }
}

if (! function_exists('ns_ruleeditor_can_remove_all_rows')) {
    function ns_ruleeditor_can_remove_all_rows(int $editor): bool
    {
        return NSRuleEditor::canRemoveAllRows($editor);
    }
}
