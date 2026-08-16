<?php

use AppKit\NS\NSTextFinder\NSTextFinder;
use Microscrap\Bindings\AppKit\Enums\TextFinderAction;

/*
| NSTextFinder helpers — 1:1 over AppKit\NS\NSTextFinder\NSTextFinder
*/

if (! function_exists('ns_textfinder_create')) {
    function ns_textfinder_create(): int
    {
        return NSTextFinder::create();
    }
}

if (! function_exists('ns_textfinder_wrap')) {
    function ns_textfinder_wrap(int $nsTextFinderPtr): int
    {
        return NSTextFinder::wrap($nsTextFinderPtr);
    }
}

if (! function_exists('ns_textfinder_destroy')) {
    function ns_textfinder_destroy(int $finder): void
    {
        NSTextFinder::destroy($finder);
    }
}

if (! function_exists('ns_textfinder_perform_action')) {
    function ns_textfinder_perform_action(int $finder, TextFinderAction|int $action): void
    {
        NSTextFinder::performAction($finder, $action instanceof TextFinderAction ? $action->value : $action);
    }
}

if (! function_exists('ns_textfinder_validate_action')) {
    function ns_textfinder_validate_action(int $finder, TextFinderAction|int $action): bool
    {
        return NSTextFinder::validateAction($finder, $action instanceof TextFinderAction ? $action->value : $action);
    }
}

if (! function_exists('ns_textfinder_set_incremental_searching_enabled')) {
    function ns_textfinder_set_incremental_searching_enabled(int $finder, bool $flag): void
    {
        NSTextFinder::setIncrementalSearchingEnabled($finder, $flag);
    }
}

if (! function_exists('ns_textfinder_incremental_searching_enabled')) {
    function ns_textfinder_incremental_searching_enabled(int $finder): bool
    {
        return NSTextFinder::incrementalSearchingEnabled($finder);
    }
}

if (! function_exists('ns_textfinder_set_find_indicator_needs_update')) {
    function ns_textfinder_set_find_indicator_needs_update(int $finder, bool $flag): void
    {
        NSTextFinder::setFindIndicatorNeedsUpdate($finder, $flag);
    }
}

if (! function_exists('ns_textfinder_find_indicator_needs_update')) {
    function ns_textfinder_find_indicator_needs_update(int $finder): bool
    {
        return NSTextFinder::findIndicatorNeedsUpdate($finder);
    }
}

if (! function_exists('ns_textfinder_cancel_find_indicator')) {
    function ns_textfinder_cancel_find_indicator(int $finder): void
    {
        NSTextFinder::cancelFindIndicator($finder);
    }
}

if (! function_exists('ns_textfinder_note_client_string_will_change')) {
    function ns_textfinder_note_client_string_will_change(int $finder): void
    {
        NSTextFinder::noteClientStringWillChange($finder);
    }
}
