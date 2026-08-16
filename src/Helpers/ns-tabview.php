<?php

use AppKit\NS\NSTabView\NSTabView;

/*
| NSTabView helpers — 1:1 over AppKit\NS\NSTabView\NSTabView
*/

if (! function_exists('ns_tabview_create')) {
    function ns_tabview_create(int $x, int $y, int $width, int $height): int
    {
        return NSTabView::create($x, $y, $width, $height);
    }
}

if (! function_exists('ns_tabview_destroy')) {
    function ns_tabview_destroy(int $tabs): void
    {
        NSTabView::destroy($tabs);
    }
}

if (! function_exists('ns_tabview_add_tab')) {
    function ns_tabview_add_tab(int $tabs, string $title, int $child): void
    {
        NSTabView::addTab($tabs, $title, $child);
    }
}

if (! function_exists('ns_tabview_get_selected')) {
    function ns_tabview_get_selected(int $tabs): int
    {
        return NSTabView::getSelected($tabs);
    }
}

if (! function_exists('ns_tabview_set_selected')) {
    function ns_tabview_set_selected(int $tabs, int $index): void
    {
        NSTabView::setSelected($tabs, $index);
    }
}
