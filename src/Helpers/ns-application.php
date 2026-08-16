<?php

use AppKit\NS\NSApplication\NSApplication;

/*
| NSApplication helpers — 1:1 over AppKit\NS\NSApplication\NSApplication
*/

if (! function_exists('ns_app_init')) {
    function ns_app_init(): bool
    {
        return NSApplication::init();
    }
}

if (! function_exists('ns_app_shared')) {
    function ns_app_shared(): int
    {
        return NSApplication::shared();
    }
}

if (! function_exists('ns_app_poll')) {
    function ns_app_poll(): bool
    {
        return NSApplication::poll();
    }
}

if (! function_exists('ns_app_run')) {
    function ns_app_run(): void
    {
        NSApplication::run();
    }
}

if (! function_exists('ns_app_terminate')) {
    function ns_app_terminate(): void
    {
        NSApplication::terminate();
    }
}

if (! function_exists('ns_app_should_quit')) {
    function ns_app_should_quit(): bool
    {
        return NSApplication::shouldQuit();
    }
}

if (! function_exists('ns_app_reset_quit')) {
    function ns_app_reset_quit(): void
    {
        NSApplication::resetQuit();
    }
}

if (! function_exists('ns_app_nsapp')) {
    function ns_app_nsapp(): int
    {
        return NSApplication::nsApp();
    }
}

if (! function_exists('ns_app_appkit_version_number')) {
    function ns_app_appkit_version_number(): float
    {
        return NSApplication::appKitVersionNumber();
    }
}
