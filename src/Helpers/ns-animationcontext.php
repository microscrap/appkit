<?php

use AppKit\NS\NSAnimationContext\NSAnimationContext;

/*
| NSAnimationContext helpers — 1:1 over AppKit\NS\NSAnimationContext\NSAnimationContext
*/

if (! function_exists('ns_animationcontext_begin_grouping')) {
    function ns_animationcontext_begin_grouping(): void
    {
        NSAnimationContext::beginGrouping();
    }
}

if (! function_exists('ns_animationcontext_end_grouping')) {
    function ns_animationcontext_end_grouping(): void
    {
        NSAnimationContext::endGrouping();
    }
}

if (! function_exists('ns_animationcontext_current')) {
    function ns_animationcontext_current(): int
    {
        return NSAnimationContext::current();
    }
}

if (! function_exists('ns_animationcontext_set_duration')) {
    function ns_animationcontext_set_duration(int $context, float $duration): void
    {
        NSAnimationContext::setDuration($context, $duration);
    }
}

if (! function_exists('ns_animationcontext_get_duration')) {
    function ns_animationcontext_get_duration(int $context): float
    {
        return NSAnimationContext::getDuration($context);
    }
}

if (! function_exists('ns_animationcontext_set_allows_implicit_animation')) {
    function ns_animationcontext_set_allows_implicit_animation(int $context, bool $enabled): void
    {
        NSAnimationContext::setAllowsImplicitAnimation($context, $enabled);
    }
}

if (! function_exists('ns_animationcontext_get_allows_implicit_animation')) {
    function ns_animationcontext_get_allows_implicit_animation(int $context): bool
    {
        return NSAnimationContext::getAllowsImplicitAnimation($context);
    }
}
