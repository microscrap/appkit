<?php

use AppKit\NS\NSSharingService\NSSharingService;

/*
| NSSharingService helpers — 1:1 over AppKit\NS\NSSharingService\NSSharingService
*/

if (! function_exists('ns_sharingservice_named')) {
    function ns_sharingservice_named(string $name): int
    {
        return NSSharingService::named($name);
    }
}

if (! function_exists('ns_sharingservice_wrap')) {
    function ns_sharingservice_wrap(int $nsSharingServicePtr): int
    {
        return NSSharingService::wrap($nsSharingServicePtr);
    }
}

if (! function_exists('ns_sharingservice_destroy')) {
    function ns_sharingservice_destroy(int $service): void
    {
        NSSharingService::destroy($service);
    }
}

if (! function_exists('ns_sharingservice_nssharingservice')) {
    function ns_sharingservice_nssharingservice(int $service): int
    {
        return NSSharingService::nsSharingService($service);
    }
}

if (! function_exists('ns_sharingservice_get_title')) {
    function ns_sharingservice_get_title(int $service): string
    {
        return NSSharingService::getTitle($service);
    }
}

if (! function_exists('ns_sharingservice_get_menu_item_title')) {
    function ns_sharingservice_get_menu_item_title(int $service): string
    {
        return NSSharingService::getMenuItemTitle($service);
    }
}

if (! function_exists('ns_sharingservice_set_menu_item_title')) {
    function ns_sharingservice_set_menu_item_title(int $service, string $title): void
    {
        NSSharingService::setMenuItemTitle($service, $title);
    }
}

if (! function_exists('ns_sharingservice_get_subject')) {
    function ns_sharingservice_get_subject(int $service): string
    {
        return NSSharingService::getSubject($service);
    }
}

if (! function_exists('ns_sharingservice_set_subject')) {
    function ns_sharingservice_set_subject(int $service, string $subject): void
    {
        NSSharingService::setSubject($service, $subject);
    }
}

if (! function_exists('ns_sharingservice_set_recipients')) {
    function ns_sharingservice_set_recipients(int $service, array $recipients): void
    {
        NSSharingService::setRecipients($service, $recipients);
    }
}

if (! function_exists('ns_sharingservice_get_recipients')) {
    function ns_sharingservice_get_recipients(int $service): array
    {
        return NSSharingService::getRecipients($service);
    }
}

if (! function_exists('ns_sharingservice_can_perform_with_strings')) {
    function ns_sharingservice_can_perform_with_strings(int $service, array $strings): bool
    {
        return NSSharingService::canPerformWithStrings($service, $strings);
    }
}

if (! function_exists('ns_sharingservice_perform_with_strings')) {
    function ns_sharingservice_perform_with_strings(int $service, array $strings): void
    {
        NSSharingService::performWithStrings($service, $strings);
    }
}
