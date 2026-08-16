<?php

use AppKit\NS\NSScrubber\NSScrubber;

/*
| NSScrubber helpers — 1:1 over AppKit\NS\NSScrubber\NSScrubber
*/

if (! function_exists('ns_scrubber_create')) {
    function ns_scrubber_create(int $x, int $y, int $width, int $height): int
    {
        return NSScrubber::create($x, $y, $width, $height);
    }
}

if (! function_exists('ns_scrubber_wrap')) {
    function ns_scrubber_wrap(int $nsScrubberPtr): int
    {
        return NSScrubber::wrap($nsScrubberPtr);
    }
}

if (! function_exists('ns_scrubber_destroy')) {
    function ns_scrubber_destroy(int $scrubber): void
    {
        NSScrubber::destroy($scrubber);
    }
}

if (! function_exists('ns_scrubber_nsscrubber')) {
    function ns_scrubber_nsscrubber(int $scrubber): int
    {
        return NSScrubber::nsScrubber($scrubber);
    }
}

if (! function_exists('ns_scrubber_clear')) {
    function ns_scrubber_clear(int $scrubber): void
    {
        NSScrubber::clear($scrubber);
    }
}

if (! function_exists('ns_scrubber_add_item')) {
    function ns_scrubber_add_item(int $scrubber, string $title): void
    {
        NSScrubber::addItem($scrubber, $title);
    }
}

if (! function_exists('ns_scrubber_number_of_items')) {
    function ns_scrubber_number_of_items(int $scrubber): int
    {
        return NSScrubber::numberOfItems($scrubber);
    }
}

if (! function_exists('ns_scrubber_set_mode')) {
    function ns_scrubber_set_mode(int $scrubber, int $mode): void
    {
        NSScrubber::setMode($scrubber, $mode);
    }
}

if (! function_exists('ns_scrubber_get_mode')) {
    function ns_scrubber_get_mode(int $scrubber): int
    {
        return NSScrubber::getMode($scrubber);
    }
}

if (! function_exists('ns_scrubber_set_item_alignment')) {
    function ns_scrubber_set_item_alignment(int $scrubber, int $alignment): void
    {
        NSScrubber::setItemAlignment($scrubber, $alignment);
    }
}

if (! function_exists('ns_scrubber_get_item_alignment')) {
    function ns_scrubber_get_item_alignment(int $scrubber): int
    {
        return NSScrubber::getItemAlignment($scrubber);
    }
}

if (! function_exists('ns_scrubber_set_continuous')) {
    function ns_scrubber_set_continuous(int $scrubber, bool $flag): void
    {
        NSScrubber::setContinuous($scrubber, $flag);
    }
}

if (! function_exists('ns_scrubber_is_continuous')) {
    function ns_scrubber_is_continuous(int $scrubber): bool
    {
        return NSScrubber::isContinuous($scrubber);
    }
}

if (! function_exists('ns_scrubber_set_selected_index')) {
    function ns_scrubber_set_selected_index(int $scrubber, int $index): void
    {
        NSScrubber::setSelectedIndex($scrubber, $index);
    }
}

if (! function_exists('ns_scrubber_get_selected_index')) {
    function ns_scrubber_get_selected_index(int $scrubber): int
    {
        return NSScrubber::getSelectedIndex($scrubber);
    }
}

if (! function_exists('ns_scrubber_get_highlighted_index')) {
    function ns_scrubber_get_highlighted_index(int $scrubber): int
    {
        return NSScrubber::highlightedIndex($scrubber);
    }
}

if (! function_exists('ns_scrubber_set_shows_arrow_buttons')) {
    function ns_scrubber_set_shows_arrow_buttons(int $scrubber, bool $flag): void
    {
        NSScrubber::setShowsArrowButtons($scrubber, $flag);
    }
}

if (! function_exists('ns_scrubber_shows_arrow_buttons')) {
    function ns_scrubber_shows_arrow_buttons(int $scrubber): bool
    {
        return NSScrubber::showsArrowButtons($scrubber);
    }
}

if (! function_exists('ns_scrubber_set_shows_additional_content_indicators')) {
    function ns_scrubber_set_shows_additional_content_indicators(int $scrubber, bool $flag): void
    {
        NSScrubber::setShowsAdditionalContentIndicators($scrubber, $flag);
    }
}

if (! function_exists('ns_scrubber_shows_additional_content_indicators')) {
    function ns_scrubber_shows_additional_content_indicators(int $scrubber): bool
    {
        return NSScrubber::showsAdditionalContentIndicators($scrubber);
    }
}

if (! function_exists('ns_scrubber_reload_data')) {
    function ns_scrubber_reload_data(int $scrubber): void
    {
        NSScrubber::reloadData($scrubber);
    }
}

if (! function_exists('ns_scrubber_poll_selection')) {
    function ns_scrubber_poll_selection(int $scrubber): bool
    {
        return NSScrubber::pollSelection($scrubber);
    }
}

if (! function_exists('ns_scrubber_set_layout')) {
    function ns_scrubber_set_layout(int $scrubber, int $layout): void
    {
        NSScrubber::setLayout($scrubber, $layout);
    }
}

if (! function_exists('ns_scrubber_get_layout')) {
    function ns_scrubber_get_layout(int $scrubber): int
    {
        return NSScrubber::getLayout($scrubber);
    }
}
