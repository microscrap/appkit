<?php

use AppKit\NS\NSMenuItem\NSMenuItem;

/*
| NSMenuItem helpers — 1:1 over AppKit\NS\NSMenuItem\NSMenuItem
*/

if (! function_exists('ns_menuitem_create')) {
    function ns_menuitem_create(string $title, string $keyEquivalent = ''): int
    {
        return NSMenuItem::create($title, $keyEquivalent);
    }
}

if (! function_exists('ns_menuitem_separator')) {
    function ns_menuitem_separator(): int
    {
        return NSMenuItem::separator();
    }
}

if (! function_exists('ns_menuitem_section_header')) {
    function ns_menuitem_section_header(string $title): int
    {
        return NSMenuItem::sectionHeader($title);
    }
}

if (! function_exists('ns_menuitem_wrap')) {
    function ns_menuitem_wrap(int $nsMenuItemPtr): int
    {
        return NSMenuItem::wrap($nsMenuItemPtr);
    }
}

if (! function_exists('ns_menuitem_destroy')) {
    function ns_menuitem_destroy(int $item): void
    {
        NSMenuItem::destroy($item);
    }
}

if (! function_exists('ns_menuitem_nsmenuitem')) {
    function ns_menuitem_nsmenuitem(int $item): int
    {
        return NSMenuItem::nsMenuItem($item);
    }
}

if (! function_exists('ns_menuitem_set_title')) {
    function ns_menuitem_set_title(int $item, string $title): void
    {
        NSMenuItem::setTitle($item, $title);
    }
}

if (! function_exists('ns_menuitem_get_title')) {
    function ns_menuitem_get_title(int $item): string
    {
        return NSMenuItem::getTitle($item);
    }
}

if (! function_exists('ns_menuitem_set_subtitle')) {
    function ns_menuitem_set_subtitle(int $item, string $subtitle): void
    {
        NSMenuItem::setSubtitle($item, $subtitle);
    }
}

if (! function_exists('ns_menuitem_get_subtitle')) {
    function ns_menuitem_get_subtitle(int $item): string
    {
        return NSMenuItem::getSubtitle($item);
    }
}

if (! function_exists('ns_menuitem_set_key_equivalent')) {
    function ns_menuitem_set_key_equivalent(int $item, string $key): void
    {
        NSMenuItem::setKeyEquivalent($item, $key);
    }
}

if (! function_exists('ns_menuitem_get_key_equivalent')) {
    function ns_menuitem_get_key_equivalent(int $item): string
    {
        return NSMenuItem::getKeyEquivalent($item);
    }
}

if (! function_exists('ns_menuitem_set_enabled')) {
    function ns_menuitem_set_enabled(int $item, bool $flag): void
    {
        NSMenuItem::setEnabled($item, $flag);
    }
}

if (! function_exists('ns_menuitem_is_enabled')) {
    function ns_menuitem_is_enabled(int $item): bool
    {
        return NSMenuItem::isEnabled($item);
    }
}

if (! function_exists('ns_menuitem_set_hidden')) {
    function ns_menuitem_set_hidden(int $item, bool $flag): void
    {
        NSMenuItem::setHidden($item, $flag);
    }
}

if (! function_exists('ns_menuitem_is_hidden')) {
    function ns_menuitem_is_hidden(int $item): bool
    {
        return NSMenuItem::isHidden($item);
    }
}

if (! function_exists('ns_menuitem_set_state')) {
    function ns_menuitem_set_state(int $item, int $state): void
    {
        NSMenuItem::setState($item, $state);
    }
}

if (! function_exists('ns_menuitem_get_state')) {
    function ns_menuitem_get_state(int $item): int
    {
        return NSMenuItem::getState($item);
    }
}

if (! function_exists('ns_menuitem_set_tag')) {
    function ns_menuitem_set_tag(int $item, int $tag): void
    {
        NSMenuItem::setTag($item, $tag);
    }
}

if (! function_exists('ns_menuitem_get_tag')) {
    function ns_menuitem_get_tag(int $item): int
    {
        return NSMenuItem::getTag($item);
    }
}

if (! function_exists('ns_menuitem_set_tool_tip')) {
    function ns_menuitem_set_tool_tip(int $item, string $tip): void
    {
        NSMenuItem::setToolTip($item, $tip);
    }
}

if (! function_exists('ns_menuitem_get_tool_tip')) {
    function ns_menuitem_get_tool_tip(int $item): string
    {
        return NSMenuItem::getToolTip($item);
    }
}

if (! function_exists('ns_menuitem_set_indentation_level')) {
    function ns_menuitem_set_indentation_level(int $item, int $level): void
    {
        NSMenuItem::setIndentationLevel($item, $level);
    }
}

if (! function_exists('ns_menuitem_get_indentation_level')) {
    function ns_menuitem_get_indentation_level(int $item): int
    {
        return NSMenuItem::getIndentationLevel($item);
    }
}

if (! function_exists('ns_menuitem_set_represented_object')) {
    function ns_menuitem_set_represented_object(int $item, string $token): void
    {
        NSMenuItem::setRepresentedObject($item, $token);
    }
}

if (! function_exists('ns_menuitem_get_represented_object')) {
    function ns_menuitem_get_represented_object(int $item): string
    {
        return NSMenuItem::getRepresentedObject($item);
    }
}

if (! function_exists('ns_menuitem_set_view')) {
    function ns_menuitem_set_view(int $item, int $view): void
    {
        NSMenuItem::setView($item, $view);
    }
}

if (! function_exists('ns_menuitem_view')) {
    function ns_menuitem_view(int $item): int
    {
        return NSMenuItem::view($item);
    }
}

if (! function_exists('ns_menuitem_is_separator')) {
    function ns_menuitem_is_separator(int $item): bool
    {
        return NSMenuItem::isSeparator($item);
    }
}

if (! function_exists('ns_menuitem_is_section_header')) {
    function ns_menuitem_is_section_header(int $item): bool
    {
        return NSMenuItem::isSectionHeader($item);
    }
}

if (! function_exists('ns_menuitem_has_submenu')) {
    function ns_menuitem_has_submenu(int $item): bool
    {
        return NSMenuItem::hasSubmenu($item);
    }
}

if (! function_exists('ns_menu_add_item')) {
    function ns_menu_add_item(string $menuTitle, string $itemTitle, string $keyEquivalent, string $actionId): bool
    {
        return NSMenuItem::add($menuTitle, $itemTitle, $keyEquivalent, $actionId);
    }
}
