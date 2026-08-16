<?php

use AppKit\NS\NSGraphicsContext\NSGraphicsContext;

/*
| NSGraphicsContext helpers — 1:1 over AppKit\NS\NSGraphicsContext\NSGraphicsContext
*/

if (! function_exists('ns_graphicscontext_current')) {
    function ns_graphicscontext_current(): int
    {
        return NSGraphicsContext::current();
    }
}

if (! function_exists('ns_graphicscontext_set_current')) {
    function ns_graphicscontext_set_current(int $context): void
    {
        NSGraphicsContext::setCurrent($context);
    }
}

if (! function_exists('ns_graphicscontext_drawing_to_screen')) {
    function ns_graphicscontext_drawing_to_screen(): bool
    {
        return NSGraphicsContext::drawingToScreen();
    }
}

if (! function_exists('ns_graphicscontext_instance_drawing_to_screen')) {
    function ns_graphicscontext_instance_drawing_to_screen(int $context): bool
    {
        return NSGraphicsContext::instanceDrawingToScreen($context);
    }
}

if (! function_exists('ns_graphicscontext_save_state')) {
    function ns_graphicscontext_save_state(): void
    {
        NSGraphicsContext::saveState();
    }
}

if (! function_exists('ns_graphicscontext_restore_state')) {
    function ns_graphicscontext_restore_state(): void
    {
        NSGraphicsContext::restoreState();
    }
}

if (! function_exists('ns_graphicscontext_with_bitmap_rep')) {
    function ns_graphicscontext_with_bitmap_rep(int $bitmapRep): int
    {
        return NSGraphicsContext::withBitmapRep($bitmapRep);
    }
}

if (! function_exists('ns_graphicscontext_wrap')) {
    function ns_graphicscontext_wrap(int $nsGraphicsContextPtr): int
    {
        return NSGraphicsContext::wrap($nsGraphicsContextPtr);
    }
}

if (! function_exists('ns_graphicscontext_destroy')) {
    function ns_graphicscontext_destroy(int $context): void
    {
        NSGraphicsContext::destroy($context);
    }
}

if (! function_exists('ns_graphicscontext_nsgraphicscontext')) {
    function ns_graphicscontext_nsgraphicscontext(int $context): int
    {
        return NSGraphicsContext::nsGraphicsContext($context);
    }
}

if (! function_exists('ns_graphicscontext_save_graphics_state')) {
    function ns_graphicscontext_save_graphics_state(int $context): void
    {
        NSGraphicsContext::saveGraphicsState($context);
    }
}

if (! function_exists('ns_graphicscontext_restore_graphics_state')) {
    function ns_graphicscontext_restore_graphics_state(int $context): void
    {
        NSGraphicsContext::restoreGraphicsState($context);
    }
}

if (! function_exists('ns_graphicscontext_flush')) {
    function ns_graphicscontext_flush(int $context): void
    {
        NSGraphicsContext::flush($context);
    }
}

if (! function_exists('ns_graphicscontext_set_should_antialias')) {
    function ns_graphicscontext_set_should_antialias(int $context, bool $enabled): void
    {
        NSGraphicsContext::setShouldAntialias($context, $enabled);
    }
}

if (! function_exists('ns_graphicscontext_get_should_antialias')) {
    function ns_graphicscontext_get_should_antialias(int $context): bool
    {
        return NSGraphicsContext::getShouldAntialias($context);
    }
}

if (! function_exists('ns_graphicscontext_set_image_interpolation')) {
    function ns_graphicscontext_set_image_interpolation(int $context, int $interpolation): void
    {
        NSGraphicsContext::setImageInterpolation($context, $interpolation);
    }
}

if (! function_exists('ns_graphicscontext_get_image_interpolation')) {
    function ns_graphicscontext_get_image_interpolation(int $context): int
    {
        return NSGraphicsContext::getImageInterpolation($context);
    }
}

if (! function_exists('ns_graphicscontext_set_pattern_phase')) {
    function ns_graphicscontext_set_pattern_phase(int $context, float $x, float $y): void
    {
        NSGraphicsContext::setPatternPhase($context, $x, $y);
    }
}

if (! function_exists('ns_graphicscontext_get_pattern_phase')) {
    function ns_graphicscontext_get_pattern_phase(int $context): array
    {
        return NSGraphicsContext::getPatternPhase($context);
    }
}

if (! function_exists('ns_graphicscontext_set_compositing_operation')) {
    function ns_graphicscontext_set_compositing_operation(int $context, int $operation): void
    {
        NSGraphicsContext::setCompositingOperation($context, $operation);
    }
}

if (! function_exists('ns_graphicscontext_get_compositing_operation')) {
    function ns_graphicscontext_get_compositing_operation(int $context): int
    {
        return NSGraphicsContext::getCompositingOperation($context);
    }
}

if (! function_exists('ns_graphicscontext_is_flipped')) {
    function ns_graphicscontext_is_flipped(int $context): bool
    {
        return NSGraphicsContext::isFlipped($context);
    }
}
