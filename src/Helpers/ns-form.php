<?php

use AppKit\NS\NSForm\NSForm;

/*
| NSForm helpers — 1:1 over AppKit\NS\NSForm\NSForm (deprecated AppKit type)
*/

if (! function_exists('ns_form_create')) {
    function ns_form_create(int $x, int $y, int $width, int $height): int
    {
        return NSForm::create($x, $y, $width, $height);
    }
}

if (! function_exists('ns_form_destroy')) {
    function ns_form_destroy(int $form): void
    {
        NSForm::destroy($form);
    }
}

if (! function_exists('ns_form_add_entry')) {
    function ns_form_add_entry(int $form, string $title): int
    {
        return NSForm::addEntry($form, $title);
    }
}

if (! function_exists('ns_form_set_title_at')) {
    function ns_form_set_title_at(int $form, int $index, string $title): void
    {
        NSForm::setTitleAt($form, $index, $title);
    }
}

if (! function_exists('ns_form_get_title_at')) {
    function ns_form_get_title_at(int $form, int $index): string
    {
        return NSForm::getTitleAt($form, $index);
    }
}

if (! function_exists('ns_form_set_value_at')) {
    function ns_form_set_value_at(int $form, int $index, string $value): void
    {
        NSForm::setValueAt($form, $index, $value);
    }
}

if (! function_exists('ns_form_get_value_at')) {
    function ns_form_get_value_at(int $form, int $index): string
    {
        return NSForm::getValueAt($form, $index);
    }
}

if (! function_exists('ns_form_cell_at')) {
    function ns_form_cell_at(int $form, int $index): int
    {
        return NSForm::cellAt($form, $index);
    }
}

if (! function_exists('ns_form_number_of_rows')) {
    function ns_form_number_of_rows(int $form): int
    {
        return NSForm::numberOfRows($form);
    }
}
