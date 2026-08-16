<?php

use AppKit\NS\NSTextLayoutManager\NSTextLayoutManager;

/*
| NSTextLayoutManager helpers — 1:1 over AppKit\NS\NSTextLayoutManager\NSTextLayoutManager
*/

if (! function_exists('ns_textlayoutmanager_create')) {
    function ns_textlayoutmanager_create(): int
    {
        return NSTextLayoutManager::create();
    }
}

if (! function_exists('ns_textlayoutmanager_wrap')) {
    function ns_textlayoutmanager_wrap(int $nsTextLayoutManagerPtr): int
    {
        return NSTextLayoutManager::wrap($nsTextLayoutManagerPtr);
    }
}

if (! function_exists('ns_textlayoutmanager_destroy')) {
    function ns_textlayoutmanager_destroy(int $manager): void
    {
        NSTextLayoutManager::destroy($manager);
    }
}

if (! function_exists('ns_textlayoutmanager_uses_font_leading')) {
    function ns_textlayoutmanager_uses_font_leading(int $manager): bool
    {
        return NSTextLayoutManager::usesFontLeading($manager);
    }
}

if (! function_exists('ns_textlayoutmanager_set_uses_font_leading')) {
    function ns_textlayoutmanager_set_uses_font_leading(int $manager, bool $flag): void
    {
        NSTextLayoutManager::setUsesFontLeading($manager, $flag);
    }
}

if (! function_exists('ns_textlayoutmanager_limits_layout_for_suspicious_contents')) {
    function ns_textlayoutmanager_limits_layout_for_suspicious_contents(int $manager): bool
    {
        return NSTextLayoutManager::limitsLayoutForSuspiciousContents($manager);
    }
}

if (! function_exists('ns_textlayoutmanager_set_limits_layout_for_suspicious_contents')) {
    function ns_textlayoutmanager_set_limits_layout_for_suspicious_contents(int $manager, bool $flag): void
    {
        NSTextLayoutManager::setLimitsLayoutForSuspiciousContents($manager, $flag);
    }
}

if (! function_exists('ns_textlayoutmanager_uses_hyphenation')) {
    function ns_textlayoutmanager_uses_hyphenation(int $manager): bool
    {
        return NSTextLayoutManager::usesHyphenation($manager);
    }
}

if (! function_exists('ns_textlayoutmanager_set_uses_hyphenation')) {
    function ns_textlayoutmanager_set_uses_hyphenation(int $manager, bool $flag): void
    {
        NSTextLayoutManager::setUsesHyphenation($manager, $flag);
    }
}

if (! function_exists('ns_textlayoutmanager_replace_text_content_manager')) {
    function ns_textlayoutmanager_replace_text_content_manager(int $manager, int $contentManager): void
    {
        NSTextLayoutManager::replaceTextContentManager($manager, $contentManager);
    }
}

if (! function_exists('ns_textlayoutmanager_set_text_container')) {
    function ns_textlayoutmanager_set_text_container(int $manager, int $container): void
    {
        NSTextLayoutManager::setTextContainer($manager, $container);
    }
}

if (! function_exists('ns_textlayoutmanager_get_text_container')) {
    function ns_textlayoutmanager_get_text_container(int $manager): int
    {
        return NSTextLayoutManager::getTextContainer($manager);
    }
}

if (! function_exists('ns_textlayoutmanager_usage_bounds_for_text_container')) {
    function ns_textlayoutmanager_usage_bounds_for_text_container(int $manager): array
    {
        return NSTextLayoutManager::usageBoundsForTextContainer($manager);
    }
}

if (! function_exists('ns_textlayoutmanager_text_viewport_layout_controller')) {
    function ns_textlayoutmanager_text_viewport_layout_controller(int $manager): int
    {
        return NSTextLayoutManager::textViewportLayoutController($manager);
    }
}

if (! function_exists('ns_textlayoutmanager_ensure_layout_for_bounds')) {
    function ns_textlayoutmanager_ensure_layout_for_bounds(int $manager, float $x, float $y, float $w, float $h): void
    {
        NSTextLayoutManager::ensureLayoutForBounds($manager, $x, $y, $w, $h);
    }
}

if (! function_exists('ns_textlayoutmanager_invalidate_layout_for_range')) {
    function ns_textlayoutmanager_invalidate_layout_for_range(int $manager, int $nsTextRangePtr): void
    {
        NSTextLayoutManager::invalidateLayoutForRange($manager, $nsTextRangePtr);
    }
}

if (! function_exists('ns_textlayoutmanager_text_layout_fragment_for_position')) {
    function ns_textlayoutmanager_text_layout_fragment_for_position(int $manager, float $x, float $y): int
    {
        return NSTextLayoutManager::textLayoutFragmentForPosition($manager, $x, $y);
    }
}

if (! function_exists('ns_textlayoutmanager_text_selections_count')) {
    function ns_textlayoutmanager_text_selections_count(int $manager): int
    {
        return NSTextLayoutManager::textSelectionsCount($manager);
    }
}
