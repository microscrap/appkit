<?php

use AppKit\NS\NSPopUpButtonCell\NSPopUpButtonCell;

/*
| NSPopUpButtonCell helpers — 1:1 over AppKit\NS\NSPopUpButtonCell\NSPopUpButtonCell
*/

if (! function_exists('ns_popupbuttoncell_create_text')) {
    function ns_popupbuttoncell_create_text(string $value = '', bool $pullsDown = false): int
    {
        return NSPopUpButtonCell::createText($value, $pullsDown);
    }
}

if (! function_exists('ns_popupbuttoncell_wrap')) {
    function ns_popupbuttoncell_wrap(int $nsPopUpButtonCellPtr): int
    {
        return NSPopUpButtonCell::wrap($nsPopUpButtonCellPtr);
    }
}

if (! function_exists('ns_popupbuttoncell_destroy')) {
    function ns_popupbuttoncell_destroy(int $cell): void
    {
        NSPopUpButtonCell::destroy($cell);
    }
}

if (! function_exists('ns_popupbuttoncell_nspopupbuttoncell')) {
    function ns_popupbuttoncell_nspopupbuttoncell(int $cell): int
    {
        return NSPopUpButtonCell::nsPopUpButtonCell($cell);
    }
}

if (! function_exists('ns_popupbuttoncell_set_title')) {
    function ns_popupbuttoncell_set_title(int $cell, string $title): void
    {
        NSPopUpButtonCell::setTitle($cell, $title);
    }
}

if (! function_exists('ns_popupbuttoncell_get_title')) {
    function ns_popupbuttoncell_get_title(int $cell): string
    {
        return NSPopUpButtonCell::getTitle($cell);
    }
}

if (! function_exists('ns_popupbuttoncell_set_menu')) {
    function ns_popupbuttoncell_set_menu(int $cell, int $menu): void
    {
        NSPopUpButtonCell::setMenu($cell, $menu);
    }
}

if (! function_exists('ns_popupbuttoncell_get_menu')) {
    function ns_popupbuttoncell_get_menu(int $cell): int
    {
        return NSPopUpButtonCell::getMenu($cell);
    }
}

if (! function_exists('ns_popupbuttoncell_set_pulls_down')) {
    function ns_popupbuttoncell_set_pulls_down(int $cell, bool $flag): void
    {
        NSPopUpButtonCell::setPullsDown($cell, $flag);
    }
}

if (! function_exists('ns_popupbuttoncell_pulls_down')) {
    function ns_popupbuttoncell_pulls_down(int $cell): bool
    {
        return NSPopUpButtonCell::pullsDown($cell);
    }
}

if (! function_exists('ns_popupbuttoncell_set_autoenables_items')) {
    function ns_popupbuttoncell_set_autoenables_items(int $cell, bool $flag): void
    {
        NSPopUpButtonCell::setAutoenablesItems($cell, $flag);
    }
}

if (! function_exists('ns_popupbuttoncell_autoenables_items')) {
    function ns_popupbuttoncell_autoenables_items(int $cell): bool
    {
        return NSPopUpButtonCell::autoenablesItems($cell);
    }
}

if (! function_exists('ns_popupbuttoncell_set_uses_item_from_menu')) {
    function ns_popupbuttoncell_set_uses_item_from_menu(int $cell, bool $flag): void
    {
        NSPopUpButtonCell::setUsesItemFromMenu($cell, $flag);
    }
}

if (! function_exists('ns_popupbuttoncell_uses_item_from_menu')) {
    function ns_popupbuttoncell_uses_item_from_menu(int $cell): bool
    {
        return NSPopUpButtonCell::usesItemFromMenu($cell);
    }
}

if (! function_exists('ns_popupbuttoncell_set_alters_state_of_selected_item')) {
    function ns_popupbuttoncell_set_alters_state_of_selected_item(int $cell, bool $flag): void
    {
        NSPopUpButtonCell::setAltersStateOfSelectedItem($cell, $flag);
    }
}

if (! function_exists('ns_popupbuttoncell_alters_state_of_selected_item')) {
    function ns_popupbuttoncell_alters_state_of_selected_item(int $cell): bool
    {
        return NSPopUpButtonCell::altersStateOfSelectedItem($cell);
    }
}

if (! function_exists('ns_popupbuttoncell_add_item_with_title')) {
    function ns_popupbuttoncell_add_item_with_title(int $cell, string $title): void
    {
        NSPopUpButtonCell::addItemWithTitle($cell, $title);
    }
}

if (! function_exists('ns_popupbuttoncell_remove_all_items')) {
    function ns_popupbuttoncell_remove_all_items(int $cell): void
    {
        NSPopUpButtonCell::removeAllItems($cell);
    }
}

if (! function_exists('ns_popupbuttoncell_number_of_items')) {
    function ns_popupbuttoncell_number_of_items(int $cell): int
    {
        return NSPopUpButtonCell::numberOfItems($cell);
    }
}

if (! function_exists('ns_popupbuttoncell_select_item_at_index')) {
    function ns_popupbuttoncell_select_item_at_index(int $cell, int $index): void
    {
        NSPopUpButtonCell::selectItemAtIndex($cell, $index);
    }
}

if (! function_exists('ns_popupbuttoncell_index_of_selected_item')) {
    function ns_popupbuttoncell_index_of_selected_item(int $cell): int
    {
        return NSPopUpButtonCell::indexOfSelectedItem($cell);
    }
}

if (! function_exists('ns_popupbuttoncell_title_of_selected_item')) {
    function ns_popupbuttoncell_title_of_selected_item(int $cell): string
    {
        return NSPopUpButtonCell::titleOfSelectedItem($cell);
    }
}

if (! function_exists('ns_popupbuttoncell_set_arrow_position')) {
    function ns_popupbuttoncell_set_arrow_position(int $cell, int $position): void
    {
        NSPopUpButtonCell::setArrowPosition($cell, $position);
    }
}

if (! function_exists('ns_popupbuttoncell_get_arrow_position')) {
    function ns_popupbuttoncell_get_arrow_position(int $cell): int
    {
        return NSPopUpButtonCell::getArrowPosition($cell);
    }
}
