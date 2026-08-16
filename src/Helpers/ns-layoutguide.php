<?php

use AppKit\NS\NSLayoutGuide\NSLayoutGuide;

/*
| NSLayoutGuide helpers — 1:1 over AppKit\NS\NSLayoutGuide\NSLayoutGuide
*/

if (! function_exists('ns_layoutguide_create')) {
    function ns_layoutguide_create(): int
    {
        return NSLayoutGuide::create();
    }
}

if (! function_exists('ns_layoutguide_wrap')) {
    function ns_layoutguide_wrap(int $nsLayoutGuidePtr): int
    {
        return NSLayoutGuide::wrap($nsLayoutGuidePtr);
    }
}

if (! function_exists('ns_layoutguide_destroy')) {
    function ns_layoutguide_destroy(int $guide): void
    {
        NSLayoutGuide::destroy($guide);
    }
}

if (! function_exists('ns_layoutguide_nslayoutguide')) {
    function ns_layoutguide_nslayoutguide(int $guide): int
    {
        return NSLayoutGuide::nsLayoutGuide($guide);
    }
}

if (! function_exists('ns_layoutguide_get_frame')) {
    function ns_layoutguide_get_frame(int $guide): array
    {
        return NSLayoutGuide::getFrame($guide);
    }
}

if (! function_exists('ns_layoutguide_set_identifier')) {
    function ns_layoutguide_set_identifier(int $guide, string $identifier): void
    {
        NSLayoutGuide::setIdentifier($guide, $identifier);
    }
}

if (! function_exists('ns_layoutguide_identifier')) {
    function ns_layoutguide_identifier(int $guide): string
    {
        return NSLayoutGuide::identifier($guide);
    }
}

if (! function_exists('ns_layoutguide_owning_view')) {
    function ns_layoutguide_owning_view(int $guide): int
    {
        return NSLayoutGuide::owningView($guide);
    }
}

if (! function_exists('ns_layoutguide_add_to_view')) {
    function ns_layoutguide_add_to_view(int $guide, int $view): void
    {
        NSLayoutGuide::addToView($guide, $view);
    }
}

if (! function_exists('ns_layoutguide_remove_from_view')) {
    function ns_layoutguide_remove_from_view(int $guide, int $view): void
    {
        NSLayoutGuide::removeFromView($guide, $view);
    }
}

if (! function_exists('ns_layoutguide_leading_anchor')) {
    function ns_layoutguide_leading_anchor(int $guide): int
    {
        return NSLayoutGuide::leadingAnchor($guide);
    }
}

if (! function_exists('ns_layoutguide_trailing_anchor')) {
    function ns_layoutguide_trailing_anchor(int $guide): int
    {
        return NSLayoutGuide::trailingAnchor($guide);
    }
}

if (! function_exists('ns_layoutguide_left_anchor')) {
    function ns_layoutguide_left_anchor(int $guide): int
    {
        return NSLayoutGuide::leftAnchor($guide);
    }
}

if (! function_exists('ns_layoutguide_right_anchor')) {
    function ns_layoutguide_right_anchor(int $guide): int
    {
        return NSLayoutGuide::rightAnchor($guide);
    }
}

if (! function_exists('ns_layoutguide_top_anchor')) {
    function ns_layoutguide_top_anchor(int $guide): int
    {
        return NSLayoutGuide::topAnchor($guide);
    }
}

if (! function_exists('ns_layoutguide_bottom_anchor')) {
    function ns_layoutguide_bottom_anchor(int $guide): int
    {
        return NSLayoutGuide::bottomAnchor($guide);
    }
}

if (! function_exists('ns_layoutguide_width_anchor')) {
    function ns_layoutguide_width_anchor(int $guide): int
    {
        return NSLayoutGuide::widthAnchor($guide);
    }
}

if (! function_exists('ns_layoutguide_height_anchor')) {
    function ns_layoutguide_height_anchor(int $guide): int
    {
        return NSLayoutGuide::heightAnchor($guide);
    }
}

if (! function_exists('ns_layoutguide_center_x_anchor')) {
    function ns_layoutguide_center_x_anchor(int $guide): int
    {
        return NSLayoutGuide::centerXAnchor($guide);
    }
}

if (! function_exists('ns_layoutguide_center_y_anchor')) {
    function ns_layoutguide_center_y_anchor(int $guide): int
    {
        return NSLayoutGuide::centerYAnchor($guide);
    }
}

if (! function_exists('ns_layoutguide_has_ambiguous_layout')) {
    function ns_layoutguide_has_ambiguous_layout(int $guide): bool
    {
        return NSLayoutGuide::hasAmbiguousLayout($guide);
    }
}
