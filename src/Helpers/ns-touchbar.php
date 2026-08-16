<?php

use AppKit\NS\NSTouchBar\NSTouchBar;

/*
| NSTouchBar helpers — 1:1 over AppKit\NS\NSTouchBar\NSTouchBar
*/

if (! function_exists('ns_touchbar_create')) {
    function ns_touchbar_create(): int
    {
        return NSTouchBar::create();
    }
}

if (! function_exists('ns_touchbar_wrap')) {
    function ns_touchbar_wrap(int $nsTouchBarPtr): int
    {
        return NSTouchBar::wrap($nsTouchBarPtr);
    }
}

if (! function_exists('ns_touchbar_destroy')) {
    function ns_touchbar_destroy(int $bar): void
    {
        NSTouchBar::destroy($bar);
    }
}

if (! function_exists('ns_touchbar_nstouchbar')) {
    function ns_touchbar_nstouchbar(int $bar): int
    {
        return NSTouchBar::nsTouchBar($bar);
    }
}

if (! function_exists('ns_touchbar_set_customization_identifier')) {
    function ns_touchbar_set_customization_identifier(int $bar, string $identifier): void
    {
        NSTouchBar::setCustomizationIdentifier($bar, $identifier);
    }
}

if (! function_exists('ns_touchbar_get_customization_identifier')) {
    function ns_touchbar_get_customization_identifier(int $bar): string
    {
        return NSTouchBar::getCustomizationIdentifier($bar);
    }
}

if (! function_exists('ns_touchbar_set_default_item_identifiers')) {
    function ns_touchbar_set_default_item_identifiers(int $bar, array $identifiers): void
    {
        NSTouchBar::setDefaultItemIdentifiers($bar, $identifiers);
    }
}

if (! function_exists('ns_touchbar_get_default_item_identifiers')) {
    function ns_touchbar_get_default_item_identifiers(int $bar): array
    {
        return NSTouchBar::getDefaultItemIdentifiers($bar);
    }
}

if (! function_exists('ns_touchbar_set_template_items')) {
    function ns_touchbar_set_template_items(int $bar, array $items): void
    {
        NSTouchBar::setTemplateItems($bar, $items);
    }
}

if (! function_exists('ns_touchbar_get_item_identifiers')) {
    function ns_touchbar_get_item_identifiers(int $bar): array
    {
        return NSTouchBar::getItemIdentifiers($bar);
    }
}

if (! function_exists('ns_touchbar_item_for_identifier')) {
    function ns_touchbar_item_for_identifier(int $bar, string $identifier): int
    {
        return NSTouchBar::itemForIdentifier($bar, $identifier);
    }
}

if (! function_exists('ns_touchbar_is_visible')) {
    function ns_touchbar_is_visible(int $bar): bool
    {
        return NSTouchBar::isVisible($bar);
    }
}

if (! function_exists('ns_touchbar_assign_to_responder')) {
    function ns_touchbar_assign_to_responder(int $bar, int $responder): void
    {
        NSTouchBar::assignToResponder($bar, $responder);
    }
}

if (! function_exists('ns_touchbar_from_responder')) {
    function ns_touchbar_from_responder(int $responder): int
    {
        return NSTouchBar::touchBarFromResponder($responder);
    }
}

if (! function_exists('ns_touchbar_set_automatic_customize_menu_item_enabled')) {
    function ns_touchbar_set_automatic_customize_menu_item_enabled(bool $enabled): void
    {
        NSTouchBar::setAutomaticCustomizeTouchBarMenuItemEnabled($enabled);
    }
}

if (! function_exists('ns_touchbar_is_automatic_customize_menu_item_enabled')) {
    function ns_touchbar_is_automatic_customize_menu_item_enabled(): bool
    {
        return NSTouchBar::isAutomaticCustomizeTouchBarMenuItemEnabled();
    }
}
