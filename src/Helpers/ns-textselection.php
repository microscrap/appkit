<?php

use AppKit\NS\NSTextSelection\NSTextSelection;

/*
| NSTextSelection helpers — 1:1 over AppKit\NS\NSTextSelection\NSTextSelection
*/

if (! function_exists('ns_textselection_create_with_location')) {
    function ns_textselection_create_with_location(int $nsTextLocationPtr, int $affinity): int
    {
        return NSTextSelection::createWithLocation($nsTextLocationPtr, $affinity);
    }
}

if (! function_exists('ns_textselection_wrap')) {
    function ns_textselection_wrap(int $nsTextSelectionPtr): int
    {
        return NSTextSelection::wrap($nsTextSelectionPtr);
    }
}

if (! function_exists('ns_textselection_destroy')) {
    function ns_textselection_destroy(int $selection): void
    {
        NSTextSelection::destroy($selection);
    }
}

if (! function_exists('ns_textselection_get_granularity')) {
    function ns_textselection_get_granularity(int $selection): int
    {
        return NSTextSelection::granularity($selection);
    }
}

if (! function_exists('ns_textselection_get_affinity')) {
    function ns_textselection_get_affinity(int $selection): int
    {
        return NSTextSelection::affinity($selection);
    }
}

if (! function_exists('ns_textselection_is_transient')) {
    function ns_textselection_is_transient(int $selection): bool
    {
        return NSTextSelection::isTransient($selection);
    }
}

if (! function_exists('ns_textselection_text_ranges_count')) {
    function ns_textselection_text_ranges_count(int $selection): int
    {
        return NSTextSelection::textRangesCount($selection);
    }
}

if (! function_exists('ns_textselection_anchor_position_offset')) {
    function ns_textselection_anchor_position_offset(int $selection): float
    {
        return NSTextSelection::getAnchorPositionOffset($selection);
    }
}

if (! function_exists('ns_textselection_set_anchor_position_offset')) {
    function ns_textselection_set_anchor_position_offset(int $selection, float $offset): void
    {
        NSTextSelection::setAnchorPositionOffset($selection, $offset);
    }
}
