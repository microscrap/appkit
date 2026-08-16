<?php

use AppKit\NS\NSStatusBarButton\NSStatusBarButton;

/*
| NSStatusBarButton helpers — 1:1 over AppKit\NS\NSStatusBarButton\NSStatusBarButton
*/

if (! function_exists('ns_statusbarbutton_wrap')) {
    function ns_statusbarbutton_wrap(int $nsStatusBarButtonPtr): int
    {
        return NSStatusBarButton::wrap($nsStatusBarButtonPtr);
    }
}

if (! function_exists('ns_statusbarbutton_from_status_item')) {
    function ns_statusbarbutton_from_status_item(int $item): int
    {
        return NSStatusBarButton::fromStatusItem($item);
    }
}

if (! function_exists('ns_statusbarbutton_destroy')) {
    function ns_statusbarbutton_destroy(int $button): void
    {
        NSStatusBarButton::destroy($button);
    }
}

if (! function_exists('ns_statusbarbutton_set_title')) {
    function ns_statusbarbutton_set_title(int $button, string $title): void
    {
        NSStatusBarButton::setTitle($button, $title);
    }
}

if (! function_exists('ns_statusbarbutton_get_title')) {
    function ns_statusbarbutton_get_title(int $button): string
    {
        return NSStatusBarButton::getTitle($button);
    }
}

if (! function_exists('ns_statusbarbutton_set_appears_disabled')) {
    function ns_statusbarbutton_set_appears_disabled(int $button, bool $flag): void
    {
        NSStatusBarButton::setAppearsDisabled($button, $flag);
    }
}

if (! function_exists('ns_statusbarbutton_appears_disabled')) {
    function ns_statusbarbutton_appears_disabled(int $button): bool
    {
        return NSStatusBarButton::appearsDisabled($button);
    }
}

if (! function_exists('ns_statusbarbutton_set_image')) {
    function ns_statusbarbutton_set_image(int $button, int $image): void
    {
        NSStatusBarButton::setImage($button, $image);
    }
}
