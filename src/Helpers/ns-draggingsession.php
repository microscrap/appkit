<?php

use AppKit\NS\NSDraggingSession\NSDraggingSession;

/*
| NSDraggingSession helpers — 1:1 over AppKit\NS\NSDraggingSession\NSDraggingSession
*/

if (! function_exists('ns_draggingsession_wrap')) {
    function ns_draggingsession_wrap(int $nsDraggingSessionPtr): int
    {
        return NSDraggingSession::wrap($nsDraggingSessionPtr);
    }
}

if (! function_exists('ns_draggingsession_destroy')) {
    function ns_draggingsession_destroy(int $session): void
    {
        NSDraggingSession::destroy($session);
    }
}

if (! function_exists('ns_draggingsession_nsdraggingsession')) {
    function ns_draggingsession_nsdraggingsession(int $session): int
    {
        return NSDraggingSession::nsDraggingSession($session);
    }
}

if (! function_exists('ns_draggingsession_get_dragging_formation')) {
    function ns_draggingsession_get_dragging_formation(int $session): int
    {
        return NSDraggingSession::getDraggingFormation($session);
    }
}

if (! function_exists('ns_draggingsession_set_dragging_formation')) {
    function ns_draggingsession_set_dragging_formation(int $session, int $formation): void
    {
        NSDraggingSession::setDraggingFormation($session, $formation);
    }
}

if (! function_exists('ns_draggingsession_animates_to_starting_positions')) {
    function ns_draggingsession_animates_to_starting_positions(int $session): bool
    {
        return NSDraggingSession::animatesToStartingPositions($session);
    }
}

if (! function_exists('ns_draggingsession_set_animates_to_starting_positions')) {
    function ns_draggingsession_set_animates_to_starting_positions(int $session, bool $value): void
    {
        NSDraggingSession::setAnimatesToStartingPositions($session, $value);
    }
}

if (! function_exists('ns_draggingsession_get_dragging_leader_index')) {
    function ns_draggingsession_get_dragging_leader_index(int $session): int
    {
        return NSDraggingSession::getDraggingLeaderIndex($session);
    }
}

if (! function_exists('ns_draggingsession_set_dragging_leader_index')) {
    function ns_draggingsession_set_dragging_leader_index(int $session, int $index): void
    {
        NSDraggingSession::setDraggingLeaderIndex($session, $index);
    }
}

if (! function_exists('ns_draggingsession_dragging_pasteboard')) {
    function ns_draggingsession_dragging_pasteboard(int $session): int
    {
        return NSDraggingSession::draggingPasteboard($session);
    }
}

if (! function_exists('ns_draggingsession_dragging_sequence_number')) {
    function ns_draggingsession_dragging_sequence_number(int $session): int
    {
        return NSDraggingSession::draggingSequenceNumber($session);
    }
}

if (! function_exists('ns_draggingsession_dragging_location')) {
    function ns_draggingsession_dragging_location(int $session): array
    {
        return NSDraggingSession::draggingLocation($session);
    }
}
