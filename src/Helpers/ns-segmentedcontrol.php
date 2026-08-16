<?php

use AppKit\NS\NSSegmentedControl\NSSegmentedControl;

/*
| NSSegmentedControl helpers — 1:1 over AppKit\NS\NSSegmentedControl\NSSegmentedControl
*/

if (! function_exists('ns_segmentedcontrol_create')) {
    function ns_segmentedcontrol_create(int $x, int $y, int $width, int $height, int $count): int
    {
        return NSSegmentedControl::create($x, $y, $width, $height, $count);
    }
}

if (! function_exists('ns_segmentedcontrol_destroy')) {
    function ns_segmentedcontrol_destroy(int $control): void
    {
        NSSegmentedControl::destroy($control);
    }
}

if (! function_exists('ns_segmentedcontrol_set_label')) {
    function ns_segmentedcontrol_set_label(int $control, int $index, string $title): void
    {
        NSSegmentedControl::setLabel($control, $index, $title);
    }
}

if (! function_exists('ns_segmentedcontrol_set_selected')) {
    function ns_segmentedcontrol_set_selected(int $control, int $index): void
    {
        NSSegmentedControl::setSelected($control, $index);
    }
}

if (! function_exists('ns_segmentedcontrol_get_selected')) {
    function ns_segmentedcontrol_get_selected(int $control): int
    {
        return NSSegmentedControl::getSelected($control);
    }
}

if (! function_exists('ns_segmentedcontrol_poll_change')) {
    function ns_segmentedcontrol_poll_change(int $control): bool
    {
        return NSSegmentedControl::pollChange($control);
    }
}
