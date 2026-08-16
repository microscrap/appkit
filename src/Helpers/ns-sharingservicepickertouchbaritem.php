<?php

use AppKit\NS\NSSharingServicePickerTouchBarItem\NSSharingServicePickerTouchBarItem;

/*
| NSSharingServicePickerTouchBarItem helpers — 1:1 over AppKit\NS\NSSharingServicePickerTouchBarItem\NSSharingServicePickerTouchBarItem
*/

if (! function_exists('ns_sharingservicepickertouchbaritem_create')) {
    function ns_sharingservicepickertouchbaritem_create(string $identifier): int
    {
        return NSSharingServicePickerTouchBarItem::create($identifier);
    }
}

if (! function_exists('ns_sharingservicepickertouchbaritem_wrap')) {
    function ns_sharingservicepickertouchbaritem_wrap(int $ptr): int
    {
        return NSSharingServicePickerTouchBarItem::wrap($ptr);
    }
}

if (! function_exists('ns_sharingservicepickertouchbaritem_destroy')) {
    function ns_sharingservicepickertouchbaritem_destroy(int $item): void
    {
        NSSharingServicePickerTouchBarItem::destroy($item);
    }
}

if (! function_exists('ns_sharingservicepickertouchbaritem_nssharingservicepickertouchbaritem')) {
    function ns_sharingservicepickertouchbaritem_nssharingservicepickertouchbaritem(int $item): int
    {
        return NSSharingServicePickerTouchBarItem::nsSharingServicePickerTouchBarItem($item);
    }
}

if (! function_exists('ns_sharingservicepickertouchbaritem_set_share_strings')) {
    function ns_sharingservicepickertouchbaritem_set_share_strings(int $item, array $strings): void
    {
        NSSharingServicePickerTouchBarItem::setShareStrings($item, $strings);
    }
}

if (! function_exists('ns_sharingservicepickertouchbaritem_poll_share_request')) {
    function ns_sharingservicepickertouchbaritem_poll_share_request(int $item): bool
    {
        return NSSharingServicePickerTouchBarItem::pollShareRequest($item);
    }
}
