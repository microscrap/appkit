<?php

use AppKit\NS\NSWorkspace\NSWorkspace;

/*
| NSWorkspace helpers — 1:1 over AppKit\NS\NSWorkspace\NSWorkspace
*/

if (! function_exists('ns_workspace_shared')) {
    function ns_workspace_shared(): int
    {
        return NSWorkspace::shared();
    }
}

if (! function_exists('ns_workspace_wrap')) {
    function ns_workspace_wrap(int $nsWorkspacePtr): int
    {
        return NSWorkspace::wrap($nsWorkspacePtr);
    }
}

if (! function_exists('ns_workspace_destroy')) {
    function ns_workspace_destroy(int $workspace): void
    {
        NSWorkspace::destroy($workspace);
    }
}

if (! function_exists('ns_workspace_nsworkspace')) {
    function ns_workspace_nsworkspace(int $workspace): int
    {
        return NSWorkspace::nsWorkspace($workspace);
    }
}

if (! function_exists('ns_workspace_open_url')) {
    function ns_workspace_open_url(int $workspace, string $url): bool
    {
        return NSWorkspace::openURL($workspace, $url);
    }
}

if (! function_exists('ns_workspace_select_file')) {
    function ns_workspace_select_file(int $workspace, string $fullPath, string $rootPath = ''): bool
    {
        return NSWorkspace::selectFile($workspace, $fullPath, $rootPath);
    }
}

if (! function_exists('ns_workspace_show_search_results')) {
    function ns_workspace_show_search_results(int $workspace, string $query): bool
    {
        return NSWorkspace::showSearchResults($workspace, $query);
    }
}

if (! function_exists('ns_workspace_is_file_package')) {
    function ns_workspace_is_file_package(int $workspace, string $path): bool
    {
        return NSWorkspace::isFilePackage($workspace, $path);
    }
}

if (! function_exists('ns_workspace_icon_for_file')) {
    function ns_workspace_icon_for_file(int $workspace, string $path): int
    {
        return NSWorkspace::iconForFile($workspace, $path);
    }
}

if (! function_exists('ns_workspace_hide_other_applications')) {
    function ns_workspace_hide_other_applications(int $workspace): void
    {
        NSWorkspace::hideOtherApplications($workspace);
    }
}

if (! function_exists('ns_workspace_url_for_application_with_bundle_identifier')) {
    function ns_workspace_url_for_application_with_bundle_identifier(int $workspace, string $bundleId): string
    {
        return NSWorkspace::urlForApplicationWithBundleIdentifier($workspace, $bundleId);
    }
}

if (! function_exists('ns_workspace_url_for_application_to_open_url')) {
    function ns_workspace_url_for_application_to_open_url(int $workspace, string $url): string
    {
        return NSWorkspace::urlForApplicationToOpenURL($workspace, $url);
    }
}

if (! function_exists('ns_workspace_frontmost_application_name')) {
    function ns_workspace_frontmost_application_name(int $workspace): string
    {
        return NSWorkspace::frontmostApplicationName($workspace);
    }
}

if (! function_exists('ns_workspace_running_applications_count')) {
    function ns_workspace_running_applications_count(int $workspace): int
    {
        return NSWorkspace::runningApplicationsCount($workspace);
    }
}

if (! function_exists('ns_workspace_running_application_at')) {
    function ns_workspace_running_application_at(int $workspace, int $index): int
    {
        return NSWorkspace::runningApplicationAt($workspace, $index);
    }
}
