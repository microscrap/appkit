<?php

use AppKit\NS\NSTextContainer\NSTextContainer;
use Microscrap\Bindings\AppKit\Enums\TextContainerLineBreakMode;

/*
| NSTextContainer helpers — 1:1 over AppKit\NS\NSTextContainer\NSTextContainer
*/

if (! function_exists('ns_textcontainer_create')) {
    function ns_textcontainer_create(float $width, float $height): int
    {
        return NSTextContainer::create($width, $height);
    }
}

if (! function_exists('ns_textcontainer_wrap')) {
    function ns_textcontainer_wrap(int $nsTextContainerPtr): int
    {
        return NSTextContainer::wrap($nsTextContainerPtr);
    }
}

if (! function_exists('ns_textcontainer_destroy')) {
    function ns_textcontainer_destroy(int $container): void
    {
        NSTextContainer::destroy($container);
    }
}

if (! function_exists('ns_textcontainer_nstextcontainer')) {
    function ns_textcontainer_nstextcontainer(int $container): int
    {
        return NSTextContainer::nsTextContainer($container);
    }
}

if (! function_exists('ns_textcontainer_set_size')) {
    function ns_textcontainer_set_size(int $container, float $width, float $height): void
    {
        NSTextContainer::setSize($container, $width, $height);
    }
}

if (! function_exists('ns_textcontainer_get_size')) {
    function ns_textcontainer_get_size(int $container): array
    {
        return NSTextContainer::getSize($container);
    }
}

if (! function_exists('ns_textcontainer_set_line_break_mode')) {
    function ns_textcontainer_set_line_break_mode(int $container, TextContainerLineBreakMode|int $mode): void
    {
        NSTextContainer::setLineBreakMode(
            $container,
            $mode instanceof TextContainerLineBreakMode ? $mode->value : $mode
        );
    }
}

if (! function_exists('ns_textcontainer_get_line_break_mode')) {
    function ns_textcontainer_get_line_break_mode(int $container): int
    {
        return NSTextContainer::getLineBreakMode($container);
    }
}

if (! function_exists('ns_textcontainer_set_line_fragment_padding')) {
    function ns_textcontainer_set_line_fragment_padding(int $container, float $padding): void
    {
        NSTextContainer::setLineFragmentPadding($container, $padding);
    }
}

if (! function_exists('ns_textcontainer_get_line_fragment_padding')) {
    function ns_textcontainer_get_line_fragment_padding(int $container): float
    {
        return NSTextContainer::getLineFragmentPadding($container);
    }
}

if (! function_exists('ns_textcontainer_set_maximum_number_of_lines')) {
    function ns_textcontainer_set_maximum_number_of_lines(int $container, int $lines): void
    {
        NSTextContainer::setMaximumNumberOfLines($container, $lines);
    }
}

if (! function_exists('ns_textcontainer_get_maximum_number_of_lines')) {
    function ns_textcontainer_get_maximum_number_of_lines(int $container): int
    {
        return NSTextContainer::getMaximumNumberOfLines($container);
    }
}

if (! function_exists('ns_textcontainer_set_width_tracks_text_view')) {
    function ns_textcontainer_set_width_tracks_text_view(int $container, bool $flag): void
    {
        NSTextContainer::setWidthTracksTextView($container, $flag);
    }
}

if (! function_exists('ns_textcontainer_width_tracks_text_view')) {
    function ns_textcontainer_width_tracks_text_view(int $container): bool
    {
        return NSTextContainer::widthTracksTextView($container);
    }
}

if (! function_exists('ns_textcontainer_set_height_tracks_text_view')) {
    function ns_textcontainer_set_height_tracks_text_view(int $container, bool $flag): void
    {
        NSTextContainer::setHeightTracksTextView($container, $flag);
    }
}

if (! function_exists('ns_textcontainer_height_tracks_text_view')) {
    function ns_textcontainer_height_tracks_text_view(int $container): bool
    {
        return NSTextContainer::heightTracksTextView($container);
    }
}

if (! function_exists('ns_textcontainer_is_simple_rectangular')) {
    function ns_textcontainer_is_simple_rectangular(int $container): bool
    {
        return NSTextContainer::isSimpleRectangularTextContainer($container);
    }
}

if (! function_exists('ns_textcontainer_replace_layout_manager')) {
    function ns_textcontainer_replace_layout_manager(int $container, int $layoutManager): void
    {
        NSTextContainer::replaceLayoutManager($container, $layoutManager);
    }
}
