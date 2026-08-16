<?php

use AppKit\NS\NSScrubberProportionalLayout\NSScrubberProportionalLayout;

/*
| NSScrubberProportionalLayout helpers — 1:1 over AppKit\NS\NSScrubberProportionalLayout\NSScrubberProportionalLayout
*/

if (! function_exists('ns_scrubberproportionallayout_create')) {
    function ns_scrubberproportionallayout_create(int $numberOfVisibleItems): int
    {
        return NSScrubberProportionalLayout::create($numberOfVisibleItems);
    }
}

if (! function_exists('ns_scrubberproportionallayout_wrap')) {
    function ns_scrubberproportionallayout_wrap(int $nsScrubberProportionalLayoutPtr): int
    {
        return NSScrubberProportionalLayout::wrap($nsScrubberProportionalLayoutPtr);
    }
}

if (! function_exists('ns_scrubberproportionallayout_destroy')) {
    function ns_scrubberproportionallayout_destroy(int $layout): void
    {
        NSScrubberProportionalLayout::destroy($layout);
    }
}

if (! function_exists('ns_scrubberproportionallayout_nsscrubberproportionallayout')) {
    function ns_scrubberproportionallayout_nsscrubberproportionallayout(int $layout): int
    {
        return NSScrubberProportionalLayout::nsScrubberProportionalLayout($layout);
    }
}

if (! function_exists('ns_scrubberproportionallayout_set_number_of_visible_items')) {
    function ns_scrubberproportionallayout_set_number_of_visible_items(int $layout, int $count): void
    {
        NSScrubberProportionalLayout::setNumberOfVisibleItems($layout, $count);
    }
}

if (! function_exists('ns_scrubberproportionallayout_get_number_of_visible_items')) {
    function ns_scrubberproportionallayout_get_number_of_visible_items(int $layout): int
    {
        return NSScrubberProportionalLayout::getNumberOfVisibleItems($layout);
    }
}
