<?php

use AppKit\NS\NSRunningApplication\NSRunningApplication;
use Microscrap\Bindings\AppKit\Enums\ApplicationActivationOptions;

/*
| NSRunningApplication helpers — 1:1 over AppKit\NS\NSRunningApplication\NSRunningApplication
*/

if (! function_exists('ns_runningapplication_current')) {
    function ns_runningapplication_current(): int
    {
        return NSRunningApplication::current();
    }
}

if (! function_exists('ns_runningapplication_wrap')) {
    function ns_runningapplication_wrap(int $nsRunningApplicationPtr): int
    {
        return NSRunningApplication::wrap($nsRunningApplicationPtr);
    }
}

if (! function_exists('ns_runningapplication_destroy')) {
    function ns_runningapplication_destroy(int $application): void
    {
        NSRunningApplication::destroy($application);
    }
}

if (! function_exists('ns_runningapplication_nsrunningapplication')) {
    function ns_runningapplication_nsrunningapplication(int $application): int
    {
        return NSRunningApplication::nsRunningApplication($application);
    }
}

if (! function_exists('ns_runningapplication_with_process_identifier')) {
    function ns_runningapplication_with_process_identifier(int $pid): int
    {
        return NSRunningApplication::withProcessIdentifier($pid);
    }
}

if (! function_exists('ns_runningapplication_with_bundle_identifier_count')) {
    function ns_runningapplication_with_bundle_identifier_count(string $bundleId): int
    {
        return NSRunningApplication::withBundleIdentifierCount($bundleId);
    }
}

if (! function_exists('ns_runningapplication_with_bundle_identifier_at')) {
    function ns_runningapplication_with_bundle_identifier_at(string $bundleId, int $index): int
    {
        return NSRunningApplication::withBundleIdentifierAt($bundleId, $index);
    }
}

if (! function_exists('ns_runningapplication_terminate_automatically_terminable_applications')) {
    function ns_runningapplication_terminate_automatically_terminable_applications(): void
    {
        NSRunningApplication::terminateAutomaticallyTerminableApplications();
    }
}

if (! function_exists('ns_runningapplication_is_terminated')) {
    function ns_runningapplication_is_terminated(int $application): bool
    {
        return NSRunningApplication::isTerminated($application);
    }
}

if (! function_exists('ns_runningapplication_is_finished_launching')) {
    function ns_runningapplication_is_finished_launching(int $application): bool
    {
        return NSRunningApplication::isFinishedLaunching($application);
    }
}

if (! function_exists('ns_runningapplication_is_hidden')) {
    function ns_runningapplication_is_hidden(int $application): bool
    {
        return NSRunningApplication::isHidden($application);
    }
}

if (! function_exists('ns_runningapplication_is_active')) {
    function ns_runningapplication_is_active(int $application): bool
    {
        return NSRunningApplication::isActive($application);
    }
}

if (! function_exists('ns_runningapplication_owns_menu_bar')) {
    function ns_runningapplication_owns_menu_bar(int $application): bool
    {
        return NSRunningApplication::ownsMenuBar($application);
    }
}

if (! function_exists('ns_runningapplication_activation_policy')) {
    function ns_runningapplication_activation_policy(int $application): int
    {
        return NSRunningApplication::activationPolicy($application);
    }
}

if (! function_exists('ns_runningapplication_process_identifier')) {
    function ns_runningapplication_process_identifier(int $application): int
    {
        return NSRunningApplication::processIdentifier($application);
    }
}

if (! function_exists('ns_runningapplication_localized_name')) {
    function ns_runningapplication_localized_name(int $application): string
    {
        return NSRunningApplication::localizedName($application);
    }
}

if (! function_exists('ns_runningapplication_bundle_identifier')) {
    function ns_runningapplication_bundle_identifier(int $application): string
    {
        return NSRunningApplication::bundleIdentifier($application);
    }
}

if (! function_exists('ns_runningapplication_bundle_url')) {
    function ns_runningapplication_bundle_url(int $application): string
    {
        return NSRunningApplication::bundleURL($application);
    }
}

if (! function_exists('ns_runningapplication_executable_url')) {
    function ns_runningapplication_executable_url(int $application): string
    {
        return NSRunningApplication::executableURL($application);
    }
}

if (! function_exists('ns_runningapplication_icon')) {
    function ns_runningapplication_icon(int $application): int
    {
        return NSRunningApplication::icon($application);
    }
}

if (! function_exists('ns_runningapplication_hide')) {
    function ns_runningapplication_hide(int $application): bool
    {
        return NSRunningApplication::hide($application);
    }
}

if (! function_exists('ns_runningapplication_unhide')) {
    function ns_runningapplication_unhide(int $application): bool
    {
        return NSRunningApplication::unhide($application);
    }
}

if (! function_exists('ns_runningapplication_activate_with_options')) {
    function ns_runningapplication_activate_with_options(int $application, ApplicationActivationOptions|int $options): bool
    {
        return NSRunningApplication::activateWithOptions(
            $application,
            $options instanceof ApplicationActivationOptions ? $options->value : $options,
        );
    }
}

if (! function_exists('ns_runningapplication_terminate')) {
    function ns_runningapplication_terminate(int $application): bool
    {
        return NSRunningApplication::terminate($application);
    }
}

if (! function_exists('ns_runningapplication_force_terminate')) {
    function ns_runningapplication_force_terminate(int $application): bool
    {
        return NSRunningApplication::forceTerminate($application);
    }
}
