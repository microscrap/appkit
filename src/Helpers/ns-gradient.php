<?php

use AppKit\NS\NSGradient\NSGradient;

/*
| NSGradient helpers — 1:1 over AppKit\NS\NSGradient\NSGradient
*/

if (! function_exists('ns_gradient_with_starting_color')) {
    function ns_gradient_with_starting_color(int $startingColor, int $endingColor): int
    {
        return NSGradient::withStartingColor($startingColor, $endingColor);
    }
}

if (! function_exists('ns_gradient_with_colors')) {
    function ns_gradient_with_colors(array $colors): int
    {
        return NSGradient::withColors($colors);
    }
}

if (! function_exists('ns_gradient_wrap')) {
    function ns_gradient_wrap(int $nsGradientPtr): int
    {
        return NSGradient::wrap($nsGradientPtr);
    }
}

if (! function_exists('ns_gradient_destroy')) {
    function ns_gradient_destroy(int $gradient): void
    {
        NSGradient::destroy($gradient);
    }
}

if (! function_exists('ns_gradient_nsgradient')) {
    function ns_gradient_nsgradient(int $gradient): int
    {
        return NSGradient::nsGradient($gradient);
    }
}

if (! function_exists('ns_gradient_draw_from_point')) {
    function ns_gradient_draw_from_point(int $gradient, float $startX, float $startY, float $endX, float $endY, int $options = 0): void
    {
        NSGradient::drawFromPoint($gradient, $startX, $startY, $endX, $endY, $options);
    }
}

if (! function_exists('ns_gradient_draw_in_rect_angle')) {
    function ns_gradient_draw_in_rect_angle(int $gradient, float $x, float $y, float $width, float $height, float $angle): void
    {
        NSGradient::drawInRectAngle($gradient, $x, $y, $width, $height, $angle);
    }
}

if (! function_exists('ns_gradient_draw_in_bezier_path_angle')) {
    function ns_gradient_draw_in_bezier_path_angle(int $gradient, int $path, float $angle): void
    {
        NSGradient::drawInBezierPathAngle($gradient, $path, $angle);
    }
}

if (! function_exists('ns_gradient_draw_from_center')) {
    function ns_gradient_draw_from_center(int $gradient, float $startCenterX, float $startCenterY, float $startRadius, float $endCenterX, float $endCenterY, float $endRadius, int $options = 0): void
    {
        NSGradient::drawFromCenter($gradient, $startCenterX, $startCenterY, $startRadius, $endCenterX, $endCenterY, $endRadius, $options);
    }
}

if (! function_exists('ns_gradient_draw_in_rect_relative_center')) {
    function ns_gradient_draw_in_rect_relative_center(int $gradient, float $x, float $y, float $width, float $height, float $relCenterX, float $relCenterY): void
    {
        NSGradient::drawInRectRelativeCenter($gradient, $x, $y, $width, $height, $relCenterX, $relCenterY);
    }
}

if (! function_exists('ns_gradient_draw_in_bezier_path_relative_center')) {
    function ns_gradient_draw_in_bezier_path_relative_center(int $gradient, int $path, float $relCenterX, float $relCenterY): void
    {
        NSGradient::drawInBezierPathRelativeCenter($gradient, $path, $relCenterX, $relCenterY);
    }
}

if (! function_exists('ns_gradient_number_of_color_stops')) {
    function ns_gradient_number_of_color_stops(int $gradient): int
    {
        return NSGradient::numberOfColorStops($gradient);
    }
}

if (! function_exists('ns_gradient_interpolated_color_at_location')) {
    function ns_gradient_interpolated_color_at_location(int $gradient, float $location): int
    {
        return NSGradient::interpolatedColorAtLocation($gradient, $location);
    }
}
