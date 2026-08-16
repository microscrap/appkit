<?php

use AppKit\NS\NSEvent\NSEvent;
use Microscrap\Bindings\AppKit\Enums\KeyCode;
use Microscrap\Bindings\AppKit\Enums\MouseButton;

/*
| NSEvent helpers — 1:1 over AppKit\NS\NSEvent\NSEvent
*/

if (! function_exists('ns_event_key_down')) {
    function ns_event_key_down(KeyCode|int $keycode): bool
    {
        return NSEvent::keyDown($keycode instanceof KeyCode ? $keycode->value : $keycode);
    }
}

if (! function_exists('ns_event_mouse_button_down')) {
    function ns_event_mouse_button_down(MouseButton|int $button): bool
    {
        return NSEvent::mouseButtonDown($button instanceof MouseButton ? $button->value : $button);
    }
}

if (! function_exists('ns_event_mouse_position')) {
    function ns_event_mouse_position(int $window = 0): array
    {
        return NSEvent::mousePosition($window);
    }
}

if (! function_exists('ns_event_mouse_scroll_delta')) {
    function ns_event_mouse_scroll_delta(): array
    {
        return NSEvent::mouseScrollDelta();
    }
}

if (! function_exists('ns_event_mouse_x')) {
    function ns_event_mouse_x(int $window = 0): float
    {
        return NSEvent::mouseX($window);
    }
}

if (! function_exists('ns_event_mouse_y')) {
    function ns_event_mouse_y(int $window = 0): float
    {
        return NSEvent::mouseY($window);
    }
}

if (! function_exists('ns_event_mouse_scroll_y')) {
    function ns_event_mouse_scroll_y(): float
    {
        return NSEvent::mouseScrollY();
    }
}
