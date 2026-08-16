<?php

use AppKit\NS\NSPressureConfiguration\NSPressureConfiguration;

/*
| NSPressureConfiguration helpers — 1:1 over AppKit\NS\NSPressureConfiguration\NSPressureConfiguration
*/

if (! function_exists('ns_pressureconfiguration_create')) {
    function ns_pressureconfiguration_create(int $pressureBehavior): int
    {
        return NSPressureConfiguration::create($pressureBehavior);
    }
}

if (! function_exists('ns_pressureconfiguration_wrap')) {
    function ns_pressureconfiguration_wrap(int $nsPressureConfigurationPtr): int
    {
        return NSPressureConfiguration::wrap($nsPressureConfigurationPtr);
    }
}

if (! function_exists('ns_pressureconfiguration_destroy')) {
    function ns_pressureconfiguration_destroy(int $configuration): void
    {
        NSPressureConfiguration::destroy($configuration);
    }
}

if (! function_exists('ns_pressureconfiguration_nspressureconfiguration')) {
    function ns_pressureconfiguration_nspressureconfiguration(int $configuration): int
    {
        return NSPressureConfiguration::nsPressureConfiguration($configuration);
    }
}

if (! function_exists('ns_pressureconfiguration_pressure_behavior')) {
    function ns_pressureconfiguration_pressure_behavior(int $configuration): int
    {
        return NSPressureConfiguration::pressureBehavior($configuration);
    }
}

if (! function_exists('ns_pressureconfiguration_set')) {
    function ns_pressureconfiguration_set(int $configuration): void
    {
        NSPressureConfiguration::set($configuration);
    }
}

if (! function_exists('ns_pressureconfiguration_set_on_view')) {
    function ns_pressureconfiguration_set_on_view(int $view, int $configuration): void
    {
        NSPressureConfiguration::setOnView($view, $configuration);
    }
}

if (! function_exists('ns_pressureconfiguration_view_configuration')) {
    function ns_pressureconfiguration_view_configuration(int $view): int
    {
        return NSPressureConfiguration::viewConfiguration($view);
    }
}
