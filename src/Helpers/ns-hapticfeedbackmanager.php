<?php

use AppKit\NS\NSHapticFeedbackManager\NSHapticFeedbackManager;
use Microscrap\Bindings\AppKit\Enums\HapticFeedbackPattern;
use Microscrap\Bindings\AppKit\Enums\HapticFeedbackPerformanceTime;

/*
| NSHapticFeedbackManager helpers — 1:1 over AppKit\NS\NSHapticFeedbackManager\NSHapticFeedbackManager
*/

if (! function_exists('ns_hapticfeedbackmanager_default_performer')) {
    function ns_hapticfeedbackmanager_default_performer(): int
    {
        return NSHapticFeedbackManager::defaultPerformer();
    }
}

if (! function_exists('ns_hapticfeedbackmanager_destroy_performer')) {
    function ns_hapticfeedbackmanager_destroy_performer(int $performer): void
    {
        NSHapticFeedbackManager::destroyPerformer($performer);
    }
}

if (! function_exists('ns_hapticfeedbackmanager_perform_feedback')) {
    function ns_hapticfeedbackmanager_perform_feedback(
        int $performer,
        HapticFeedbackPattern|int $pattern,
        HapticFeedbackPerformanceTime|int $performanceTime = 0
    ): void {
        NSHapticFeedbackManager::performFeedback(
            $performer,
            $pattern instanceof HapticFeedbackPattern ? $pattern->value : $pattern,
            $performanceTime instanceof HapticFeedbackPerformanceTime ? $performanceTime->value : $performanceTime
        );
    }
}

if (! function_exists('ns_hapticfeedbackmanager_perform_default_feedback')) {
    function ns_hapticfeedbackmanager_perform_default_feedback(
        HapticFeedbackPattern|int $pattern,
        HapticFeedbackPerformanceTime|int $performanceTime = 0
    ): void {
        NSHapticFeedbackManager::performDefaultFeedback(
            $pattern instanceof HapticFeedbackPattern ? $pattern->value : $pattern,
            $performanceTime instanceof HapticFeedbackPerformanceTime ? $performanceTime->value : $performanceTime
        );
    }
}
