<?php

use AppKit\NS\NSTextLayoutFragment\NSTextLayoutFragment;

/*
| NSTextLayoutFragment helpers — 1:1 over AppKit\NS\NSTextLayoutFragment\NSTextLayoutFragment
*/

if (! function_exists('ns_textlayoutfragment_wrap')) {
    function ns_textlayoutfragment_wrap(int $nsTextLayoutFragmentPtr): int
    {
        return NSTextLayoutFragment::wrap($nsTextLayoutFragmentPtr);
    }
}

if (! function_exists('ns_textlayoutfragment_destroy')) {
    function ns_textlayoutfragment_destroy(int $fragment): void
    {
        NSTextLayoutFragment::destroy($fragment);
    }
}

if (! function_exists('ns_textlayoutfragment_get_state')) {
    function ns_textlayoutfragment_get_state(int $fragment): int
    {
        return NSTextLayoutFragment::state($fragment);
    }
}

if (! function_exists('ns_textlayoutfragment_layout_fragment_frame')) {
    function ns_textlayoutfragment_layout_fragment_frame(int $fragment): array
    {
        return NSTextLayoutFragment::layoutFragmentFrame($fragment);
    }
}

if (! function_exists('ns_textlayoutfragment_rendering_surface_bounds')) {
    function ns_textlayoutfragment_rendering_surface_bounds(int $fragment): array
    {
        return NSTextLayoutFragment::renderingSurfaceBounds($fragment);
    }
}

if (! function_exists('ns_textlayoutfragment_text_line_fragments_count')) {
    function ns_textlayoutfragment_text_line_fragments_count(int $fragment): int
    {
        return NSTextLayoutFragment::textLineFragmentsCount($fragment);
    }
}

if (! function_exists('ns_textlayoutfragment_invalidate_layout')) {
    function ns_textlayoutfragment_invalidate_layout(int $fragment): void
    {
        NSTextLayoutFragment::invalidateLayout($fragment);
    }
}

if (! function_exists('ns_textlayoutfragment_leading_padding')) {
    function ns_textlayoutfragment_leading_padding(int $fragment): float
    {
        return NSTextLayoutFragment::leadingPadding($fragment);
    }
}

if (! function_exists('ns_textlayoutfragment_trailing_padding')) {
    function ns_textlayoutfragment_trailing_padding(int $fragment): float
    {
        return NSTextLayoutFragment::trailingPadding($fragment);
    }
}

if (! function_exists('ns_textlayoutfragment_top_margin')) {
    function ns_textlayoutfragment_top_margin(int $fragment): float
    {
        return NSTextLayoutFragment::topMargin($fragment);
    }
}

if (! function_exists('ns_textlayoutfragment_bottom_margin')) {
    function ns_textlayoutfragment_bottom_margin(int $fragment): float
    {
        return NSTextLayoutFragment::bottomMargin($fragment);
    }
}
