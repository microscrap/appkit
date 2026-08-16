<?php

use AppKit\NS\NSSharingServicePickerToolbarItem\NSSharingServicePickerToolbarItem;

/*
| NSSharingServicePickerToolbarItem helpers — 1:1 over AppKit\NS\NSSharingServicePickerToolbarItem\NSSharingServicePickerToolbarItem
*/

if (! function_exists('ns_sharingservicepickertoolbaritem_create')) {
    function ns_sharingservicepickertoolbaritem_create(string $identifier): int
    {
        return NSSharingServicePickerToolbarItem::create($identifier);
    }
}

if (! function_exists('ns_sharingservicepickertoolbaritem_wrap')) {
    function ns_sharingservicepickertoolbaritem_wrap(int $nsSharingServicePickerToolbarItemPtr): int
    {
        return NSSharingServicePickerToolbarItem::wrap($nsSharingServicePickerToolbarItemPtr);
    }
}

if (! function_exists('ns_sharingservicepickertoolbaritem_destroy')) {
    function ns_sharingservicepickertoolbaritem_destroy(int $item): void
    {
        NSSharingServicePickerToolbarItem::destroy($item);
    }
}

if (! function_exists('ns_sharingservicepickertoolbaritem_nssharingservicepickertoolbaritem')) {
    function ns_sharingservicepickertoolbaritem_nssharingservicepickertoolbaritem(int $item): int
    {
        return NSSharingServicePickerToolbarItem::nsSharingServicePickerToolbarItem($item);
    }
}

if (! function_exists('ns_sharingservicepickertoolbaritem_set_share_strings')) {
    function ns_sharingservicepickertoolbaritem_set_share_strings(int $item, array $strings): void
    {
        NSSharingServicePickerToolbarItem::setShareStrings($item, $strings);
    }
}

if (! function_exists('ns_sharingservicepickertoolbaritem_get_share_strings')) {
    function ns_sharingservicepickertoolbaritem_get_share_strings(int $item): array
    {
        return NSSharingServicePickerToolbarItem::getShareStrings($item);
    }
}

if (! function_exists('ns_sharingservicepickertoolbaritem_poll_share_request')) {
    function ns_sharingservicepickertoolbaritem_poll_share_request(int $item): bool
    {
        return NSSharingServicePickerToolbarItem::pollShareRequest($item);
    }
}
