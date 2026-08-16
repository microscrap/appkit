<?php

use AppKit\NS\NSSearchFieldCell\NSSearchFieldCell;

/*
| NSSearchFieldCell helpers — 1:1 over AppKit\NS\NSSearchFieldCell\NSSearchFieldCell
*/

if (! function_exists('ns_searchfieldcell_create_text')) {
    function ns_searchfieldcell_create_text(string $value = ''): int
    {
        return NSSearchFieldCell::createText($value);
    }
}

if (! function_exists('ns_searchfieldcell_wrap')) {
    function ns_searchfieldcell_wrap(int $nsSearchFieldCellPtr): int
    {
        return NSSearchFieldCell::wrap($nsSearchFieldCellPtr);
    }
}

if (! function_exists('ns_searchfieldcell_destroy')) {
    function ns_searchfieldcell_destroy(int $cell): void
    {
        NSSearchFieldCell::destroy($cell);
    }
}

if (! function_exists('ns_searchfieldcell_nssearchfieldcell')) {
    function ns_searchfieldcell_nssearchfieldcell(int $cell): int
    {
        return NSSearchFieldCell::nsSearchFieldCell($cell);
    }
}

if (! function_exists('ns_searchfieldcell_set_title')) {
    function ns_searchfieldcell_set_title(int $cell, string $title): void
    {
        NSSearchFieldCell::setTitle($cell, $title);
    }
}

if (! function_exists('ns_searchfieldcell_get_title')) {
    function ns_searchfieldcell_get_title(int $cell): string
    {
        return NSSearchFieldCell::getTitle($cell);
    }
}

if (! function_exists('ns_searchfieldcell_set_string')) {
    function ns_searchfieldcell_set_string(int $cell, string $value): void
    {
        NSSearchFieldCell::setStringValue($cell, $value);
    }
}

if (! function_exists('ns_searchfieldcell_get_string')) {
    function ns_searchfieldcell_get_string(int $cell): string
    {
        return NSSearchFieldCell::getStringValue($cell);
    }
}

if (! function_exists('ns_searchfieldcell_set_placeholder_string')) {
    function ns_searchfieldcell_set_placeholder_string(int $cell, string $placeholder): void
    {
        NSSearchFieldCell::setPlaceholderString($cell, $placeholder);
    }
}

if (! function_exists('ns_searchfieldcell_get_placeholder_string')) {
    function ns_searchfieldcell_get_placeholder_string(int $cell): string
    {
        return NSSearchFieldCell::getPlaceholderString($cell);
    }
}

if (! function_exists('ns_searchfieldcell_set_recent_searches')) {
    function ns_searchfieldcell_set_recent_searches(int $cell, array $searches): void
    {
        NSSearchFieldCell::setRecentSearches($cell, $searches);
    }
}

if (! function_exists('ns_searchfieldcell_get_recent_searches')) {
    function ns_searchfieldcell_get_recent_searches(int $cell): array
    {
        return NSSearchFieldCell::getRecentSearches($cell);
    }
}

if (! function_exists('ns_searchfieldcell_set_recents_autosave_name')) {
    function ns_searchfieldcell_set_recents_autosave_name(int $cell, string $name): void
    {
        NSSearchFieldCell::setRecentsAutosaveName($cell, $name);
    }
}

if (! function_exists('ns_searchfieldcell_get_recents_autosave_name')) {
    function ns_searchfieldcell_get_recents_autosave_name(int $cell): string
    {
        return NSSearchFieldCell::getRecentsAutosaveName($cell);
    }
}

if (! function_exists('ns_searchfieldcell_set_sends_whole_search_string')) {
    function ns_searchfieldcell_set_sends_whole_search_string(int $cell, bool $flag): void
    {
        NSSearchFieldCell::setSendsWholeSearchString($cell, $flag);
    }
}

if (! function_exists('ns_searchfieldcell_sends_whole_search_string')) {
    function ns_searchfieldcell_sends_whole_search_string(int $cell): bool
    {
        return NSSearchFieldCell::sendsWholeSearchString($cell);
    }
}

if (! function_exists('ns_searchfieldcell_set_maximum_recents')) {
    function ns_searchfieldcell_set_maximum_recents(int $cell, int $maximum): void
    {
        NSSearchFieldCell::setMaximumRecents($cell, $maximum);
    }
}

if (! function_exists('ns_searchfieldcell_maximum_recents')) {
    function ns_searchfieldcell_maximum_recents(int $cell): int
    {
        return NSSearchFieldCell::maximumRecents($cell);
    }
}

if (! function_exists('ns_searchfieldcell_set_sends_search_string_immediately')) {
    function ns_searchfieldcell_set_sends_search_string_immediately(int $cell, bool $flag): void
    {
        NSSearchFieldCell::setSendsSearchStringImmediately($cell, $flag);
    }
}

if (! function_exists('ns_searchfieldcell_sends_search_string_immediately')) {
    function ns_searchfieldcell_sends_search_string_immediately(int $cell): bool
    {
        return NSSearchFieldCell::sendsSearchStringImmediately($cell);
    }
}

if (! function_exists('ns_searchfieldcell_search_button_cell')) {
    function ns_searchfieldcell_search_button_cell(int $cell): int
    {
        return NSSearchFieldCell::searchButtonCell($cell);
    }
}

if (! function_exists('ns_searchfieldcell_cancel_button_cell')) {
    function ns_searchfieldcell_cancel_button_cell(int $cell): int
    {
        return NSSearchFieldCell::cancelButtonCell($cell);
    }
}

if (! function_exists('ns_searchfieldcell_reset_search_button_cell')) {
    function ns_searchfieldcell_reset_search_button_cell(int $cell): void
    {
        NSSearchFieldCell::resetSearchButtonCell($cell);
    }
}

if (! function_exists('ns_searchfieldcell_reset_cancel_button_cell')) {
    function ns_searchfieldcell_reset_cancel_button_cell(int $cell): void
    {
        NSSearchFieldCell::resetCancelButtonCell($cell);
    }
}

if (! function_exists('ns_searchfieldcell_set_search_menu_template')) {
    function ns_searchfieldcell_set_search_menu_template(int $cell, int $menu): void
    {
        NSSearchFieldCell::setSearchMenuTemplate($cell, $menu);
    }
}

if (! function_exists('ns_searchfieldcell_search_menu_template')) {
    function ns_searchfieldcell_search_menu_template(int $cell): int
    {
        return NSSearchFieldCell::searchMenuTemplate($cell);
    }
}
