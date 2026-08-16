<?php

use AppKit\NS\NSTextViewportLayoutController\NSTextViewportLayoutController;

/*
| NSTextViewportLayoutController helpers — 1:1 over AppKit\NS\NSTextViewportLayoutController\NSTextViewportLayoutController
*/

if (! function_exists('ns_textviewportlayoutcontroller_wrap')) {
    function ns_textviewportlayoutcontroller_wrap(int $nsTextViewportLayoutControllerPtr): int
    {
        return NSTextViewportLayoutController::wrap($nsTextViewportLayoutControllerPtr);
    }
}

if (! function_exists('ns_textviewportlayoutcontroller_destroy')) {
    function ns_textviewportlayoutcontroller_destroy(int $controller): void
    {
        NSTextViewportLayoutController::destroy($controller);
    }
}

if (! function_exists('ns_textviewportlayoutcontroller_viewport_bounds')) {
    function ns_textviewportlayoutcontroller_viewport_bounds(int $controller): array
    {
        return NSTextViewportLayoutController::viewportBounds($controller);
    }
}

if (! function_exists('ns_textviewportlayoutcontroller_layout_viewport')) {
    function ns_textviewportlayoutcontroller_layout_viewport(int $controller): void
    {
        NSTextViewportLayoutController::layoutViewport($controller);
    }
}

if (! function_exists('ns_textviewportlayoutcontroller_adjust_viewport_by_vertical_offset')) {
    function ns_textviewportlayoutcontroller_adjust_viewport_by_vertical_offset(int $controller, float $offset): void
    {
        NSTextViewportLayoutController::adjustViewportByVerticalOffset($controller, $offset);
    }
}
