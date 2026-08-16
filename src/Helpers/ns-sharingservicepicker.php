<?php

use AppKit\NS\NSSharingServicePicker\NSSharingServicePicker;

/*
| NSSharingServicePicker helpers — 1:1 over AppKit\NS\NSSharingServicePicker\NSSharingServicePicker
*/

if (! function_exists('ns_sharingservicepicker_create')) {
    function ns_sharingservicepicker_create(array $strings): int
    {
        return NSSharingServicePicker::create($strings);
    }
}

if (! function_exists('ns_sharingservicepicker_wrap')) {
    function ns_sharingservicepicker_wrap(int $nsSharingServicePickerPtr): int
    {
        return NSSharingServicePicker::wrap($nsSharingServicePickerPtr);
    }
}

if (! function_exists('ns_sharingservicepicker_destroy')) {
    function ns_sharingservicepicker_destroy(int $picker): void
    {
        NSSharingServicePicker::destroy($picker);
    }
}

if (! function_exists('ns_sharingservicepicker_nssharingservicepicker')) {
    function ns_sharingservicepicker_nssharingservicepicker(int $picker): int
    {
        return NSSharingServicePicker::nsSharingServicePicker($picker);
    }
}

if (! function_exists('ns_sharingservicepicker_show_relative_to_rect')) {
    function ns_sharingservicepicker_show_relative_to_rect(
        int $picker,
        float $x,
        float $y,
        float $width,
        float $height,
        int $view,
        int $preferredEdge
    ): void {
        NSSharingServicePicker::showRelativeToRect($picker, $x, $y, $width, $height, $view, $preferredEdge);
    }
}

if (! function_exists('ns_sharingservicepicker_close')) {
    function ns_sharingservicepicker_close(int $picker): void
    {
        NSSharingServicePicker::close($picker);
    }
}

if (! function_exists('ns_sharingservicepicker_poll_chosen_service')) {
    function ns_sharingservicepicker_poll_chosen_service(int $picker): string
    {
        return NSSharingServicePicker::pollChosenService($picker);
    }
}

if (! function_exists('ns_sharingservicepicker_standard_share_menu_item')) {
    function ns_sharingservicepicker_standard_share_menu_item(int $picker): int
    {
        return NSSharingServicePicker::standardShareMenuItem($picker);
    }
}
