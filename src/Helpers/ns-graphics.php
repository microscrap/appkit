<?php

use AppKit\NS\NSGraphics\NSGraphics;
use Microscrap\Bindings\AppKit\Enums\AnimationEffect;
use Microscrap\Bindings\AppKit\Enums\CompositingOperation;
use Microscrap\Bindings\AppKit\Enums\FocusRingPlacement;

/*
| NSGraphics helpers — 1:1 over AppKit\NS\NSGraphics\NSGraphics (NSBeep / NSRectFill / NSGraphics.h)
*/

if (! function_exists('ns_graphics_beep')) {
    function ns_graphics_beep(): void
    {
        NSGraphics::beep();
    }
}

if (! function_exists('ns_graphics_rect_fill')) {
    function ns_graphics_rect_fill(float $x, float $y, float $width, float $height): void
    {
        NSGraphics::rectFill($x, $y, $width, $height);
    }
}

if (! function_exists('ns_graphics_rect_fill_using_operation')) {
    function ns_graphics_rect_fill_using_operation(
        float $x,
        float $y,
        float $width,
        float $height,
        CompositingOperation|int $op
    ): void {
        NSGraphics::rectFillUsingOperation(
            $x,
            $y,
            $width,
            $height,
            $op instanceof CompositingOperation ? $op->value : $op
        );
    }
}

if (! function_exists('ns_graphics_frame_rect')) {
    function ns_graphics_frame_rect(float $x, float $y, float $width, float $height): void
    {
        NSGraphics::frameRect($x, $y, $width, $height);
    }
}

if (! function_exists('ns_graphics_frame_rect_with_width')) {
    function ns_graphics_frame_rect_with_width(float $x, float $y, float $width, float $height, float $frameWidth): void
    {
        NSGraphics::frameRectWithWidth($x, $y, $width, $height, $frameWidth);
    }
}

if (! function_exists('ns_graphics_frame_rect_with_width_using_operation')) {
    function ns_graphics_frame_rect_with_width_using_operation(
        float $x,
        float $y,
        float $width,
        float $height,
        float $frameWidth,
        CompositingOperation|int $op
    ): void {
        NSGraphics::frameRectWithWidthUsingOperation(
            $x,
            $y,
            $width,
            $height,
            $frameWidth,
            $op instanceof CompositingOperation ? $op->value : $op
        );
    }
}

if (! function_exists('ns_graphics_rect_clip')) {
    function ns_graphics_rect_clip(float $x, float $y, float $width, float $height): void
    {
        NSGraphics::rectClip($x, $y, $width, $height);
    }
}

if (! function_exists('ns_graphics_draw_gray_bezel')) {
    function ns_graphics_draw_gray_bezel(
        float $x,
        float $y,
        float $width,
        float $height,
        float $clipX,
        float $clipY,
        float $clipW,
        float $clipH
    ): void {
        NSGraphics::drawGrayBezel($x, $y, $width, $height, $clipX, $clipY, $clipW, $clipH);
    }
}

if (! function_exists('ns_graphics_draw_groove')) {
    function ns_graphics_draw_groove(
        float $x,
        float $y,
        float $width,
        float $height,
        float $clipX,
        float $clipY,
        float $clipW,
        float $clipH
    ): void {
        NSGraphics::drawGroove($x, $y, $width, $height, $clipX, $clipY, $clipW, $clipH);
    }
}

if (! function_exists('ns_graphics_draw_white_bezel')) {
    function ns_graphics_draw_white_bezel(
        float $x,
        float $y,
        float $width,
        float $height,
        float $clipX,
        float $clipY,
        float $clipW,
        float $clipH
    ): void {
        NSGraphics::drawWhiteBezel($x, $y, $width, $height, $clipX, $clipY, $clipW, $clipH);
    }
}

if (! function_exists('ns_graphics_draw_button')) {
    function ns_graphics_draw_button(
        float $x,
        float $y,
        float $width,
        float $height,
        float $clipX,
        float $clipY,
        float $clipW,
        float $clipH
    ): void {
        NSGraphics::drawButton($x, $y, $width, $height, $clipX, $clipY, $clipW, $clipH);
    }
}

if (! function_exists('ns_graphics_draw_dark_bezel')) {
    function ns_graphics_draw_dark_bezel(
        float $x,
        float $y,
        float $width,
        float $height,
        float $clipX,
        float $clipY,
        float $clipW,
        float $clipH
    ): void {
        NSGraphics::drawDarkBezel($x, $y, $width, $height, $clipX, $clipY, $clipW, $clipH);
    }
}

if (! function_exists('ns_graphics_draw_light_bezel')) {
    function ns_graphics_draw_light_bezel(
        float $x,
        float $y,
        float $width,
        float $height,
        float $clipX,
        float $clipY,
        float $clipW,
        float $clipH
    ): void {
        NSGraphics::drawLightBezel($x, $y, $width, $height, $clipX, $clipY, $clipW, $clipH);
    }
}

if (! function_exists('ns_graphics_erase_rect')) {
    function ns_graphics_erase_rect(float $x, float $y, float $width, float $height): void
    {
        NSGraphics::eraseRect($x, $y, $width, $height);
    }
}

if (! function_exists('ns_graphics_highlight_rect')) {
    function ns_graphics_highlight_rect(float $x, float $y, float $width, float $height): void
    {
        NSGraphics::highlightRect($x, $y, $width, $height);
    }
}

if (! function_exists('ns_graphics_dotted_frame_rect')) {
    function ns_graphics_dotted_frame_rect(float $x, float $y, float $width, float $height): void
    {
        NSGraphics::dottedFrameRect($x, $y, $width, $height);
    }
}

if (! function_exists('ns_graphics_draw_window_background')) {
    function ns_graphics_draw_window_background(float $x, float $y, float $width, float $height): void
    {
        NSGraphics::drawWindowBackground($x, $y, $width, $height);
    }
}

if (! function_exists('ns_graphics_set_focus_ring_style')) {
    function ns_graphics_set_focus_ring_style(FocusRingPlacement|int $placement): void
    {
        NSGraphics::setFocusRingStyle($placement instanceof FocusRingPlacement ? $placement->value : $placement);
    }
}

if (! function_exists('ns_graphics_disable_screen_updates')) {
    function ns_graphics_disable_screen_updates(): void
    {
        NSGraphics::disableScreenUpdates();
    }
}

if (! function_exists('ns_graphics_enable_screen_updates')) {
    function ns_graphics_enable_screen_updates(): void
    {
        NSGraphics::enableScreenUpdates();
    }
}

if (! function_exists('ns_graphics_show_animation_effect')) {
    function ns_graphics_show_animation_effect(
        AnimationEffect|int $effect,
        float $centerX,
        float $centerY,
        float $sizeW,
        float $sizeH
    ): void {
        NSGraphics::showAnimationEffect(
            $effect instanceof AnimationEffect ? $effect->value : $effect,
            $centerX,
            $centerY,
            $sizeW,
            $sizeH
        );
    }
}

if (! function_exists('ns_graphics_white')) {
    function ns_graphics_white(): float
    {
        return NSGraphics::white();
    }
}

if (! function_exists('ns_graphics_light_gray')) {
    function ns_graphics_light_gray(): float
    {
        return NSGraphics::lightGray();
    }
}

if (! function_exists('ns_graphics_dark_gray')) {
    function ns_graphics_dark_gray(): float
    {
        return NSGraphics::darkGray();
    }
}

if (! function_exists('ns_graphics_black')) {
    function ns_graphics_black(): float
    {
        return NSGraphics::black();
    }
}
