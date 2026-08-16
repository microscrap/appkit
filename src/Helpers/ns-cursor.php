<?php

use AppKit\NS\NSCursor\NSCursor;

/*
| NSCursor helpers — 1:1 over AppKit\NS\NSCursor\NSCursor
*/

if (! function_exists('ns_cursor_wrap')) {
    function ns_cursor_wrap(int $nsCursorPtr): int
    {
        return NSCursor::wrap($nsCursorPtr);
    }
}

if (! function_exists('ns_cursor_destroy')) {
    function ns_cursor_destroy(int $cursor): void
    {
        NSCursor::destroy($cursor);
    }
}

if (! function_exists('ns_cursor_hide')) {
    function ns_cursor_hide(): void
    {
        NSCursor::hide();
    }
}

if (! function_exists('ns_cursor_unhide')) {
    function ns_cursor_unhide(): void
    {
        NSCursor::unhide();
    }
}

if (! function_exists('ns_cursor_set_hidden_until_mouse_moves')) {
    function ns_cursor_set_hidden_until_mouse_moves(bool $flag): void
    {
        NSCursor::setHiddenUntilMouseMoves($flag);
    }
}

if (! function_exists('ns_cursor_pop_class')) {
    function ns_cursor_pop_class(): void
    {
        NSCursor::popStack();
    }
}

if (! function_exists('ns_cursor_push')) {
    function ns_cursor_push(int $cursor): void
    {
        NSCursor::push($cursor);
    }
}

if (! function_exists('ns_cursor_set')) {
    function ns_cursor_set(int $cursor): void
    {
        NSCursor::set($cursor);
    }
}

if (! function_exists('ns_cursor_pop')) {
    function ns_cursor_pop(int $cursor): void
    {
        NSCursor::pop($cursor);
    }
}

if (! function_exists('ns_cursor_hot_spot')) {
    function ns_cursor_hot_spot(int $cursor): array
    {
        return NSCursor::hotSpot($cursor);
    }
}

if (! function_exists('ns_cursor_current')) {
    function ns_cursor_current(): int
    {
        return NSCursor::currentCursor();
    }
}

if (! function_exists('ns_cursor_arrow')) {
    function ns_cursor_arrow(): int
    {
        return NSCursor::arrowCursor();
    }
}

if (! function_exists('ns_cursor_crosshair')) {
    function ns_cursor_crosshair(): int
    {
        return NSCursor::crosshairCursor();
    }
}

if (! function_exists('ns_cursor_pointing_hand')) {
    function ns_cursor_pointing_hand(): int
    {
        return NSCursor::pointingHandCursor();
    }
}

if (! function_exists('ns_cursor_i_beam')) {
    function ns_cursor_i_beam(): int
    {
        return NSCursor::iBeamCursor();
    }
}

if (! function_exists('ns_cursor_closed_hand')) {
    function ns_cursor_closed_hand(): int
    {
        return NSCursor::closedHandCursor();
    }
}

if (! function_exists('ns_cursor_open_hand')) {
    function ns_cursor_open_hand(): int
    {
        return NSCursor::openHandCursor();
    }
}

if (! function_exists('ns_cursor_operation_not_allowed')) {
    function ns_cursor_operation_not_allowed(): int
    {
        return NSCursor::operationNotAllowedCursor();
    }
}

if (! function_exists('ns_cursor_drag_link')) {
    function ns_cursor_drag_link(): int
    {
        return NSCursor::dragLinkCursor();
    }
}

if (! function_exists('ns_cursor_drag_copy')) {
    function ns_cursor_drag_copy(): int
    {
        return NSCursor::dragCopyCursor();
    }
}

if (! function_exists('ns_cursor_contextual_menu')) {
    function ns_cursor_contextual_menu(): int
    {
        return NSCursor::contextualMenuCursor();
    }
}

if (! function_exists('ns_cursor_nscursor')) {
    function ns_cursor_nscursor(int $cursor): int
    {
        return NSCursor::nsCursor($cursor);
    }
}
