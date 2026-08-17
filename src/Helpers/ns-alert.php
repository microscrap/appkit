<?php

use AppKit\NS\NSAlert\NSAlert;

/*
| NSAlert helpers — 1:1 over AppKit\NS\NSAlert\NSAlert
*/

if (! function_exists('ns_alert_create')) {
    function ns_alert_create(): int
    {
        return NSAlert::create();
    }
}

if (! function_exists('ns_alert_destroy')) {
    function ns_alert_destroy(int $alert): void
    {
        NSAlert::destroy($alert);
    }
}

if (! function_exists('ns_alert_set_message')) {
    function ns_alert_set_message(int $alert, string $text): void
    {
        NSAlert::setMessage($alert, $text);
    }
}

if (! function_exists('ns_alert_set_info')) {
    function ns_alert_set_info(int $alert, string $text): void
    {
        NSAlert::setInfo($alert, $text);
    }
}

if (! function_exists('ns_alert_add_button')) {
    function ns_alert_add_button(int $alert, string $title): void
    {
        NSAlert::addButton($alert, $title);
    }
}

if (! function_exists('ns_alert_run_modal')) {
    function ns_alert_run_modal(int $alert): int
    {
        return NSAlert::runModal($alert);
    }
}

if (! function_exists('ns_alert_begin_sheet')) {
    function ns_alert_begin_sheet(int $alert, int $window): void
    {
        NSAlert::beginSheet($alert, $window);
    }
}

if (! function_exists('ns_alert_poll_response')) {
    function ns_alert_poll_response(int $alert): int
    {
        return NSAlert::pollResponse($alert);
    }
}
