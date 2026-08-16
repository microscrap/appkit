<?php

use AppKit\NS\NSTitlebarAccessoryViewController\NSTitlebarAccessoryViewController;
use Microscrap\Bindings\AppKit\Enums\LayoutAttribute;

/*
| NSTitlebarAccessoryViewController helpers — 1:1 over AppKit\NS\NSTitlebarAccessoryViewController\NSTitlebarAccessoryViewController
*/

if (! function_exists('ns_titlebaraccessoryviewcontroller_create')) {
    function ns_titlebaraccessoryviewcontroller_create(): int
    {
        return NSTitlebarAccessoryViewController::create();
    }
}

if (! function_exists('ns_titlebaraccessoryviewcontroller_create_with_view')) {
    function ns_titlebaraccessoryviewcontroller_create_with_view(int $view): int
    {
        return NSTitlebarAccessoryViewController::createWithView($view);
    }
}

if (! function_exists('ns_titlebaraccessoryviewcontroller_wrap')) {
    function ns_titlebaraccessoryviewcontroller_wrap(int $nsTitlebarAccessoryViewControllerPtr): int
    {
        return NSTitlebarAccessoryViewController::wrap($nsTitlebarAccessoryViewControllerPtr);
    }
}

if (! function_exists('ns_titlebaraccessoryviewcontroller_destroy')) {
    function ns_titlebaraccessoryviewcontroller_destroy(int $controller): void
    {
        NSTitlebarAccessoryViewController::destroy($controller);
    }
}

if (! function_exists('ns_titlebaraccessoryviewcontroller_nstitlebaraccessoryviewcontroller')) {
    function ns_titlebaraccessoryviewcontroller_nstitlebaraccessoryviewcontroller(int $controller): int
    {
        return NSTitlebarAccessoryViewController::nsTitlebarAccessoryViewController($controller);
    }
}

if (! function_exists('ns_titlebaraccessoryviewcontroller_set_view')) {
    function ns_titlebaraccessoryviewcontroller_set_view(int $controller, int $view): void
    {
        NSTitlebarAccessoryViewController::setView($controller, $view);
    }
}

if (! function_exists('ns_titlebaraccessoryviewcontroller_view')) {
    function ns_titlebaraccessoryviewcontroller_view(int $controller): int
    {
        return NSTitlebarAccessoryViewController::view($controller);
    }
}

if (! function_exists('ns_titlebaraccessoryviewcontroller_set_layout_attribute')) {
    function ns_titlebaraccessoryviewcontroller_set_layout_attribute(
        int $controller,
        LayoutAttribute|int $attribute
    ): void {
        NSTitlebarAccessoryViewController::setLayoutAttribute(
            $controller,
            $attribute instanceof LayoutAttribute ? $attribute->value : $attribute
        );
    }
}

if (! function_exists('ns_titlebaraccessoryviewcontroller_layout_attribute')) {
    function ns_titlebaraccessoryviewcontroller_layout_attribute(int $controller): int
    {
        return NSTitlebarAccessoryViewController::layoutAttribute($controller);
    }
}

if (! function_exists('ns_titlebaraccessoryviewcontroller_set_full_screen_min_height')) {
    function ns_titlebaraccessoryviewcontroller_set_full_screen_min_height(int $controller, float $height): void
    {
        NSTitlebarAccessoryViewController::setFullScreenMinHeight($controller, $height);
    }
}

if (! function_exists('ns_titlebaraccessoryviewcontroller_full_screen_min_height')) {
    function ns_titlebaraccessoryviewcontroller_full_screen_min_height(int $controller): float
    {
        return NSTitlebarAccessoryViewController::fullScreenMinHeight($controller);
    }
}

if (! function_exists('ns_titlebaraccessoryviewcontroller_set_hidden')) {
    function ns_titlebaraccessoryviewcontroller_set_hidden(int $controller, bool $hidden): void
    {
        NSTitlebarAccessoryViewController::setHidden($controller, $hidden);
    }
}

if (! function_exists('ns_titlebaraccessoryviewcontroller_is_hidden')) {
    function ns_titlebaraccessoryviewcontroller_is_hidden(int $controller): bool
    {
        return NSTitlebarAccessoryViewController::isHidden($controller);
    }
}

if (! function_exists('ns_titlebaraccessoryviewcontroller_set_automatically_adjusts_size')) {
    function ns_titlebaraccessoryviewcontroller_set_automatically_adjusts_size(int $controller, bool $adjusts): void
    {
        NSTitlebarAccessoryViewController::setAutomaticallyAdjustsSize($controller, $adjusts);
    }
}

if (! function_exists('ns_titlebaraccessoryviewcontroller_automatically_adjusts_size')) {
    function ns_titlebaraccessoryviewcontroller_automatically_adjusts_size(int $controller): bool
    {
        return NSTitlebarAccessoryViewController::automaticallyAdjustsSize($controller);
    }
}
