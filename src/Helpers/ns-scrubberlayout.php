<?php

use AppKit\NS\NSScrubberLayout\NSScrubberLayout;

/*
| NSScrubberLayout helpers — 1:1 over AppKit\NS\NSScrubberLayout\NSScrubberLayout
*/

if (! function_exists('ns_scrubberlayout_create')) {
    function ns_scrubberlayout_create(): int
    {
        return NSScrubberLayout::create();
    }
}

if (! function_exists('ns_scrubberlayout_wrap')) {
    function ns_scrubberlayout_wrap(int $nsScrubberLayoutPtr): int
    {
        return NSScrubberLayout::wrap($nsScrubberLayoutPtr);
    }
}

if (! function_exists('ns_scrubberlayout_destroy')) {
    function ns_scrubberlayout_destroy(int $layout): void
    {
        NSScrubberLayout::destroy($layout);
    }
}

if (! function_exists('ns_scrubberlayout_nsscrubberlayout')) {
    function ns_scrubberlayout_nsscrubberlayout(int $layout): int
    {
        return NSScrubberLayout::nsScrubberLayout($layout);
    }
}

if (! function_exists('ns_scrubberlayout_invalidate')) {
    function ns_scrubberlayout_invalidate(int $layout): void
    {
        NSScrubberLayout::invalidate($layout);
    }
}

if (! function_exists('ns_scrubberlayout_scrubber')) {
    function ns_scrubberlayout_scrubber(int $layout): int
    {
        return NSScrubberLayout::scrubber($layout);
    }
}

if (! function_exists('ns_scrubberlayout_visible_rect')) {
    function ns_scrubberlayout_visible_rect(int $layout): array
    {
        return NSScrubberLayout::visibleRect($layout);
    }
}

if (! function_exists('ns_scrubberlayout_content_width')) {
    function ns_scrubberlayout_content_width(int $layout): float
    {
        return NSScrubberLayout::contentWidth($layout);
    }
}

if (! function_exists('ns_scrubberlayout_content_height')) {
    function ns_scrubberlayout_content_height(int $layout): float
    {
        return NSScrubberLayout::contentHeight($layout);
    }
}

if (! function_exists('ns_scrubberlayout_should_invalidate_for_selection_change')) {
    function ns_scrubberlayout_should_invalidate_for_selection_change(int $layout): bool
    {
        return NSScrubberLayout::shouldInvalidateForSelectionChange($layout);
    }
}

if (! function_exists('ns_scrubberlayout_should_invalidate_for_highlight_change')) {
    function ns_scrubberlayout_should_invalidate_for_highlight_change(int $layout): bool
    {
        return NSScrubberLayout::shouldInvalidateForHighlightChange($layout);
    }
}

if (! function_exists('ns_scrubberlayout_automatically_mirrors_in_rtl')) {
    function ns_scrubberlayout_automatically_mirrors_in_rtl(int $layout): bool
    {
        return NSScrubberLayout::automaticallyMirrorsInRightToLeftLayout($layout);
    }
}
