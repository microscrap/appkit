<?php

use AppKit\NS\NSCandidateListTouchBarItem\NSCandidateListTouchBarItem;

/*
| NSCandidateListTouchBarItem helpers — 1:1 over AppKit\NS\NSCandidateListTouchBarItem\NSCandidateListTouchBarItem
*/

if (! function_exists('ns_candidatelisttouchbaritem_create')) {
    function ns_candidatelisttouchbaritem_create(string $identifier): int
    {
        return NSCandidateListTouchBarItem::create($identifier);
    }
}

if (! function_exists('ns_candidatelisttouchbaritem_wrap')) {
    function ns_candidatelisttouchbaritem_wrap(int $ptr): int
    {
        return NSCandidateListTouchBarItem::wrap($ptr);
    }
}

if (! function_exists('ns_candidatelisttouchbaritem_destroy')) {
    function ns_candidatelisttouchbaritem_destroy(int $item): void
    {
        NSCandidateListTouchBarItem::destroy($item);
    }
}

if (! function_exists('ns_candidatelisttouchbaritem_nscandidatelisttouchbaritem')) {
    function ns_candidatelisttouchbaritem_nscandidatelisttouchbaritem(int $item): int
    {
        return NSCandidateListTouchBarItem::nsCandidateListTouchBarItem($item);
    }
}

if (! function_exists('ns_candidatelisttouchbaritem_set_collapsed')) {
    function ns_candidatelisttouchbaritem_set_collapsed(int $item, bool $flag): void
    {
        NSCandidateListTouchBarItem::setCollapsed($item, $flag);
    }
}

if (! function_exists('ns_candidatelisttouchbaritem_is_collapsed')) {
    function ns_candidatelisttouchbaritem_is_collapsed(int $item): bool
    {
        return NSCandidateListTouchBarItem::isCollapsed($item);
    }
}

if (! function_exists('ns_candidatelisttouchbaritem_set_candidates')) {
    function ns_candidatelisttouchbaritem_set_candidates(int $item, array $candidates): void
    {
        NSCandidateListTouchBarItem::setCandidates($item, $candidates);
    }
}

if (! function_exists('ns_candidatelisttouchbaritem_get_candidates')) {
    function ns_candidatelisttouchbaritem_get_candidates(int $item): array
    {
        return NSCandidateListTouchBarItem::getCandidates($item);
    }
}
