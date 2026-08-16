<?php

use AppKit\NS\NSToolbarItem\NSToolbarItem;

/*
| NSToolbarItem helpers — 1:1 over AppKit\NS\NSToolbarItem\NSToolbarItem
*/

if (! function_exists('ns_toolbaritem_create')) {
    function ns_toolbaritem_create(string $identifier): int
    {
        return NSToolbarItem::create($identifier);
    }
}

if (! function_exists('ns_toolbaritem_wrap')) {
    function ns_toolbaritem_wrap(int $nsToolbarItemPtr): int
    {
        return NSToolbarItem::wrap($nsToolbarItemPtr);
    }
}

if (! function_exists('ns_toolbaritem_destroy')) {
    function ns_toolbaritem_destroy(int $item): void
    {
        NSToolbarItem::destroy($item);
    }
}

if (! function_exists('ns_toolbaritem_nstoolbaritem')) {
    function ns_toolbaritem_nstoolbaritem(int $item): int
    {
        return NSToolbarItem::nsToolbarItem($item);
    }
}

if (! function_exists('ns_toolbaritem_get_item_identifier')) {
    function ns_toolbaritem_get_item_identifier(int $item): string
    {
        return NSToolbarItem::getItemIdentifier($item);
    }
}

if (! function_exists('ns_toolbaritem_set_label')) {
    function ns_toolbaritem_set_label(int $item, string $label): void
    {
        NSToolbarItem::setLabel($item, $label);
    }
}

if (! function_exists('ns_toolbaritem_get_label')) {
    function ns_toolbaritem_get_label(int $item): string
    {
        return NSToolbarItem::getLabel($item);
    }
}

if (! function_exists('ns_toolbaritem_set_palette_label')) {
    function ns_toolbaritem_set_palette_label(int $item, string $label): void
    {
        NSToolbarItem::setPaletteLabel($item, $label);
    }
}

if (! function_exists('ns_toolbaritem_get_palette_label')) {
    function ns_toolbaritem_get_palette_label(int $item): string
    {
        return NSToolbarItem::getPaletteLabel($item);
    }
}

if (! function_exists('ns_toolbaritem_set_tool_tip')) {
    function ns_toolbaritem_set_tool_tip(int $item, string $tip): void
    {
        NSToolbarItem::setToolTip($item, $tip);
    }
}

if (! function_exists('ns_toolbaritem_get_tool_tip')) {
    function ns_toolbaritem_get_tool_tip(int $item): string
    {
        return NSToolbarItem::getToolTip($item);
    }
}

if (! function_exists('ns_toolbaritem_set_tag')) {
    function ns_toolbaritem_set_tag(int $item, int $tag): void
    {
        NSToolbarItem::setTag($item, $tag);
    }
}

if (! function_exists('ns_toolbaritem_get_tag')) {
    function ns_toolbaritem_get_tag(int $item): int
    {
        return NSToolbarItem::getTag($item);
    }
}

if (! function_exists('ns_toolbaritem_set_enabled')) {
    function ns_toolbaritem_set_enabled(int $item, bool $flag): void
    {
        NSToolbarItem::setEnabled($item, $flag);
    }
}

if (! function_exists('ns_toolbaritem_is_enabled')) {
    function ns_toolbaritem_is_enabled(int $item): bool
    {
        return NSToolbarItem::isEnabled($item);
    }
}

if (! function_exists('ns_toolbaritem_set_title')) {
    function ns_toolbaritem_set_title(int $item, string $title): void
    {
        NSToolbarItem::setTitle($item, $title);
    }
}

if (! function_exists('ns_toolbaritem_get_title')) {
    function ns_toolbaritem_get_title(int $item): string
    {
        return NSToolbarItem::getTitle($item);
    }
}

if (! function_exists('ns_toolbaritem_set_bordered')) {
    function ns_toolbaritem_set_bordered(int $item, bool $flag): void
    {
        NSToolbarItem::setBordered($item, $flag);
    }
}

if (! function_exists('ns_toolbaritem_is_bordered')) {
    function ns_toolbaritem_is_bordered(int $item): bool
    {
        return NSToolbarItem::isBordered($item);
    }
}

if (! function_exists('ns_toolbaritem_set_navigational')) {
    function ns_toolbaritem_set_navigational(int $item, bool $flag): void
    {
        NSToolbarItem::setNavigational($item, $flag);
    }
}

if (! function_exists('ns_toolbaritem_is_navigational')) {
    function ns_toolbaritem_is_navigational(int $item): bool
    {
        return NSToolbarItem::isNavigational($item);
    }
}

if (! function_exists('ns_toolbaritem_set_hidden')) {
    function ns_toolbaritem_set_hidden(int $item, bool $flag): void
    {
        NSToolbarItem::setHidden($item, $flag);
    }
}

if (! function_exists('ns_toolbaritem_is_hidden')) {
    function ns_toolbaritem_is_hidden(int $item): bool
    {
        return NSToolbarItem::isHidden($item);
    }
}

if (! function_exists('ns_toolbaritem_set_visibility_priority')) {
    function ns_toolbaritem_set_visibility_priority(int $item, int $priority): void
    {
        NSToolbarItem::setVisibilityPriority($item, $priority);
    }
}

if (! function_exists('ns_toolbaritem_get_visibility_priority')) {
    function ns_toolbaritem_get_visibility_priority(int $item): int
    {
        return NSToolbarItem::getVisibilityPriority($item);
    }
}

if (! function_exists('ns_toolbaritem_set_autovalidates')) {
    function ns_toolbaritem_set_autovalidates(int $item, bool $flag): void
    {
        NSToolbarItem::setAutovalidates($item, $flag);
    }
}

if (! function_exists('ns_toolbaritem_autovalidates')) {
    function ns_toolbaritem_autovalidates(int $item): bool
    {
        return NSToolbarItem::autovalidates($item);
    }
}

if (! function_exists('ns_toolbaritem_is_visible')) {
    function ns_toolbaritem_is_visible(int $item): bool
    {
        return NSToolbarItem::isVisible($item);
    }
}

if (! function_exists('ns_toolbaritem_set_image')) {
    function ns_toolbaritem_set_image(int $item, int $image): void
    {
        NSToolbarItem::setImage($item, $image);
    }
}

if (! function_exists('ns_toolbaritem_set_view')) {
    function ns_toolbaritem_set_view(int $item, int $view): void
    {
        NSToolbarItem::setView($item, $view);
    }
}

if (! function_exists('ns_toolbaritem_get_view')) {
    function ns_toolbaritem_get_view(int $item): int
    {
        return NSToolbarItem::getView($item);
    }
}
