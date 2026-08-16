<?php

use AppKit\NS\NSSegmentedCell\NSSegmentedCell;

/*
| NSSegmentedCell helpers — 1:1 over AppKit\NS\NSSegmentedCell\NSSegmentedCell
*/

if (! function_exists('ns_segmentedcell_create_text')) {
    function ns_segmentedcell_create_text(string $value = ''): int
    {
        return NSSegmentedCell::createText($value);
    }
}

if (! function_exists('ns_segmentedcell_wrap')) {
    function ns_segmentedcell_wrap(int $nsSegmentedCellPtr): int
    {
        return NSSegmentedCell::wrap($nsSegmentedCellPtr);
    }
}

if (! function_exists('ns_segmentedcell_destroy')) {
    function ns_segmentedcell_destroy(int $cell): void
    {
        NSSegmentedCell::destroy($cell);
    }
}

if (! function_exists('ns_segmentedcell_nssegmentedcell')) {
    function ns_segmentedcell_nssegmentedcell(int $cell): int
    {
        return NSSegmentedCell::nsSegmentedCell($cell);
    }
}

if (! function_exists('ns_segmentedcell_set_title')) {
    function ns_segmentedcell_set_title(int $cell, string $title): void
    {
        NSSegmentedCell::setTitle($cell, $title);
    }
}

if (! function_exists('ns_segmentedcell_get_title')) {
    function ns_segmentedcell_get_title(int $cell): string
    {
        return NSSegmentedCell::getTitle($cell);
    }
}

if (! function_exists('ns_segmentedcell_set_state')) {
    function ns_segmentedcell_set_state(int $cell, int $state): void
    {
        NSSegmentedCell::setState($cell, $state);
    }
}

if (! function_exists('ns_segmentedcell_get_state')) {
    function ns_segmentedcell_get_state(int $cell): int
    {
        return NSSegmentedCell::getState($cell);
    }
}

if (! function_exists('ns_segmentedcell_set_enabled')) {
    function ns_segmentedcell_set_enabled(int $cell, bool $enabled): void
    {
        NSSegmentedCell::setEnabled($cell, $enabled);
    }
}

if (! function_exists('ns_segmentedcell_is_enabled')) {
    function ns_segmentedcell_is_enabled(int $cell): bool
    {
        return NSSegmentedCell::isEnabled($cell);
    }
}

if (! function_exists('ns_segmentedcell_set_tag')) {
    function ns_segmentedcell_set_tag(int $cell, int $tag): void
    {
        NSSegmentedCell::setTag($cell, $tag);
    }
}

if (! function_exists('ns_segmentedcell_get_tag')) {
    function ns_segmentedcell_get_tag(int $cell): int
    {
        return NSSegmentedCell::getTag($cell);
    }
}

if (! function_exists('ns_segmentedcell_set_segment_count')) {
    function ns_segmentedcell_set_segment_count(int $cell, int $count): void
    {
        NSSegmentedCell::setSegmentCount($cell, $count);
    }
}

if (! function_exists('ns_segmentedcell_get_segment_count')) {
    function ns_segmentedcell_get_segment_count(int $cell): int
    {
        return NSSegmentedCell::getSegmentCount($cell);
    }
}

if (! function_exists('ns_segmentedcell_set_selected_segment')) {
    function ns_segmentedcell_set_selected_segment(int $cell, int $index): void
    {
        NSSegmentedCell::setSelectedSegment($cell, $index);
    }
}

if (! function_exists('ns_segmentedcell_get_selected_segment')) {
    function ns_segmentedcell_get_selected_segment(int $cell): int
    {
        return NSSegmentedCell::getSelectedSegment($cell);
    }
}

if (! function_exists('ns_segmentedcell_select_segment_with_tag')) {
    function ns_segmentedcell_select_segment_with_tag(int $cell, int $tag): bool
    {
        return NSSegmentedCell::selectSegmentWithTag($cell, $tag);
    }
}

if (! function_exists('ns_segmentedcell_set_tracking_mode')) {
    function ns_segmentedcell_set_tracking_mode(int $cell, int $mode): void
    {
        NSSegmentedCell::setTrackingMode($cell, $mode);
    }
}

if (! function_exists('ns_segmentedcell_get_tracking_mode')) {
    function ns_segmentedcell_get_tracking_mode(int $cell): int
    {
        return NSSegmentedCell::getTrackingMode($cell);
    }
}

if (! function_exists('ns_segmentedcell_set_segment_style')) {
    function ns_segmentedcell_set_segment_style(int $cell, int $style): void
    {
        NSSegmentedCell::setSegmentStyle($cell, $style);
    }
}

if (! function_exists('ns_segmentedcell_get_segment_style')) {
    function ns_segmentedcell_get_segment_style(int $cell): int
    {
        return NSSegmentedCell::getSegmentStyle($cell);
    }
}

if (! function_exists('ns_segmentedcell_set_width_for_segment')) {
    function ns_segmentedcell_set_width_for_segment(int $cell, float $width, int $segment): void
    {
        NSSegmentedCell::setWidthForSegment($cell, $width, $segment);
    }
}

if (! function_exists('ns_segmentedcell_width_for_segment')) {
    function ns_segmentedcell_width_for_segment(int $cell, int $segment): float
    {
        return NSSegmentedCell::widthForSegment($cell, $segment);
    }
}

if (! function_exists('ns_segmentedcell_set_label_for_segment')) {
    function ns_segmentedcell_set_label_for_segment(int $cell, string $label, int $segment): void
    {
        NSSegmentedCell::setLabelForSegment($cell, $label, $segment);
    }
}

if (! function_exists('ns_segmentedcell_label_for_segment')) {
    function ns_segmentedcell_label_for_segment(int $cell, int $segment): string
    {
        return NSSegmentedCell::labelForSegment($cell, $segment);
    }
}

if (! function_exists('ns_segmentedcell_set_selected_for_segment')) {
    function ns_segmentedcell_set_selected_for_segment(int $cell, bool $selected, int $segment): void
    {
        NSSegmentedCell::setSelectedForSegment($cell, $selected, $segment);
    }
}

if (! function_exists('ns_segmentedcell_is_selected_for_segment')) {
    function ns_segmentedcell_is_selected_for_segment(int $cell, int $segment): bool
    {
        return NSSegmentedCell::isSelectedForSegment($cell, $segment);
    }
}

if (! function_exists('ns_segmentedcell_set_enabled_for_segment')) {
    function ns_segmentedcell_set_enabled_for_segment(int $cell, bool $enabled, int $segment): void
    {
        NSSegmentedCell::setEnabledForSegment($cell, $enabled, $segment);
    }
}

if (! function_exists('ns_segmentedcell_is_enabled_for_segment')) {
    function ns_segmentedcell_is_enabled_for_segment(int $cell, int $segment): bool
    {
        return NSSegmentedCell::isEnabledForSegment($cell, $segment);
    }
}

if (! function_exists('ns_segmentedcell_set_tag_for_segment')) {
    function ns_segmentedcell_set_tag_for_segment(int $cell, int $tag, int $segment): void
    {
        NSSegmentedCell::setTagForSegment($cell, $tag, $segment);
    }
}

if (! function_exists('ns_segmentedcell_tag_for_segment')) {
    function ns_segmentedcell_tag_for_segment(int $cell, int $segment): int
    {
        return NSSegmentedCell::tagForSegment($cell, $segment);
    }
}
