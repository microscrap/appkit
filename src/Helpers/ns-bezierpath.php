<?php

use AppKit\NS\NSBezierPath\NSBezierPath;

/*
| NSBezierPath helpers — 1:1 over AppKit\NS\NSBezierPath\NSBezierPath
*/

if (! function_exists('ns_bezierpath_create')) {
    function ns_bezierpath_create(): int
    {
        return NSBezierPath::create();
    }
}

if (! function_exists('ns_bezierpath_with_rect')) {
    function ns_bezierpath_with_rect(float $x, float $y, float $width, float $height): int
    {
        return NSBezierPath::withRect($x, $y, $width, $height);
    }
}

if (! function_exists('ns_bezierpath_with_oval_in_rect')) {
    function ns_bezierpath_with_oval_in_rect(float $x, float $y, float $width, float $height): int
    {
        return NSBezierPath::withOvalInRect($x, $y, $width, $height);
    }
}

if (! function_exists('ns_bezierpath_with_rounded_rect')) {
    function ns_bezierpath_with_rounded_rect(float $x, float $y, float $width, float $height, float $xRadius, float $yRadius): int
    {
        return NSBezierPath::withRoundedRect($x, $y, $width, $height, $xRadius, $yRadius);
    }
}

if (! function_exists('ns_bezierpath_wrap')) {
    function ns_bezierpath_wrap(int $nsBezierPathPtr): int
    {
        return NSBezierPath::wrap($nsBezierPathPtr);
    }
}

if (! function_exists('ns_bezierpath_destroy')) {
    function ns_bezierpath_destroy(int $path): void
    {
        NSBezierPath::destroy($path);
    }
}

if (! function_exists('ns_bezierpath_nsbezierpath')) {
    function ns_bezierpath_nsbezierpath(int $path): int
    {
        return NSBezierPath::nsBezierPath($path);
    }
}

if (! function_exists('ns_bezierpath_move_to_point')) {
    function ns_bezierpath_move_to_point(int $path, float $x, float $y): void
    {
        NSBezierPath::moveToPoint($path, $x, $y);
    }
}

if (! function_exists('ns_bezierpath_line_to_point')) {
    function ns_bezierpath_line_to_point(int $path, float $x, float $y): void
    {
        NSBezierPath::lineToPoint($path, $x, $y);
    }
}

if (! function_exists('ns_bezierpath_curve_to_point')) {
    function ns_bezierpath_curve_to_point(int $path, float $endX, float $endY, float $cp1X, float $cp1Y, float $cp2X, float $cp2Y): void
    {
        NSBezierPath::curveToPoint($path, $endX, $endY, $cp1X, $cp1Y, $cp2X, $cp2Y);
    }
}

if (! function_exists('ns_bezierpath_close_path')) {
    function ns_bezierpath_close_path(int $path): void
    {
        NSBezierPath::closePath($path);
    }
}

if (! function_exists('ns_bezierpath_remove_all_points')) {
    function ns_bezierpath_remove_all_points(int $path): void
    {
        NSBezierPath::removeAllPoints($path);
    }
}

if (! function_exists('ns_bezierpath_append_path')) {
    function ns_bezierpath_append_path(int $path, int $other): void
    {
        NSBezierPath::appendPath($path, $other);
    }
}

if (! function_exists('ns_bezierpath_append_rect')) {
    function ns_bezierpath_append_rect(int $path, float $x, float $y, float $width, float $height): void
    {
        NSBezierPath::appendRect($path, $x, $y, $width, $height);
    }
}

if (! function_exists('ns_bezierpath_append_oval_in_rect')) {
    function ns_bezierpath_append_oval_in_rect(int $path, float $x, float $y, float $width, float $height): void
    {
        NSBezierPath::appendOvalInRect($path, $x, $y, $width, $height);
    }
}

if (! function_exists('ns_bezierpath_set_line_width')) {
    function ns_bezierpath_set_line_width(int $path, float $width): void
    {
        NSBezierPath::setLineWidth($path, $width);
    }
}

if (! function_exists('ns_bezierpath_get_line_width')) {
    function ns_bezierpath_get_line_width(int $path): float
    {
        return NSBezierPath::getLineWidth($path);
    }
}

if (! function_exists('ns_bezierpath_set_line_cap')) {
    function ns_bezierpath_set_line_cap(int $path, int $style): void
    {
        NSBezierPath::setLineCap($path, $style);
    }
}

if (! function_exists('ns_bezierpath_get_line_cap')) {
    function ns_bezierpath_get_line_cap(int $path): int
    {
        return NSBezierPath::getLineCap($path);
    }
}

if (! function_exists('ns_bezierpath_set_line_join')) {
    function ns_bezierpath_set_line_join(int $path, int $style): void
    {
        NSBezierPath::setLineJoin($path, $style);
    }
}

if (! function_exists('ns_bezierpath_get_line_join')) {
    function ns_bezierpath_get_line_join(int $path): int
    {
        return NSBezierPath::getLineJoin($path);
    }
}

if (! function_exists('ns_bezierpath_set_winding_rule')) {
    function ns_bezierpath_set_winding_rule(int $path, int $rule): void
    {
        NSBezierPath::setWindingRule($path, $rule);
    }
}

if (! function_exists('ns_bezierpath_get_winding_rule')) {
    function ns_bezierpath_get_winding_rule(int $path): int
    {
        return NSBezierPath::getWindingRule($path);
    }
}

if (! function_exists('ns_bezierpath_set_miter_limit')) {
    function ns_bezierpath_set_miter_limit(int $path, float $limit): void
    {
        NSBezierPath::setMiterLimit($path, $limit);
    }
}

if (! function_exists('ns_bezierpath_get_miter_limit')) {
    function ns_bezierpath_get_miter_limit(int $path): float
    {
        return NSBezierPath::getMiterLimit($path);
    }
}

if (! function_exists('ns_bezierpath_set_flatness')) {
    function ns_bezierpath_set_flatness(int $path, float $flatness): void
    {
        NSBezierPath::setFlatness($path, $flatness);
    }
}

if (! function_exists('ns_bezierpath_get_flatness')) {
    function ns_bezierpath_get_flatness(int $path): float
    {
        return NSBezierPath::getFlatness($path);
    }
}

if (! function_exists('ns_bezierpath_stroke')) {
    function ns_bezierpath_stroke(int $path): void
    {
        NSBezierPath::stroke($path);
    }
}

if (! function_exists('ns_bezierpath_fill')) {
    function ns_bezierpath_fill(int $path): void
    {
        NSBezierPath::fill($path);
    }
}

if (! function_exists('ns_bezierpath_add_clip')) {
    function ns_bezierpath_add_clip(int $path): void
    {
        NSBezierPath::addClip($path);
    }
}

if (! function_exists('ns_bezierpath_set_clip')) {
    function ns_bezierpath_set_clip(int $path): void
    {
        NSBezierPath::setClip($path);
    }
}

if (! function_exists('ns_bezierpath_contains_point')) {
    function ns_bezierpath_contains_point(int $path, float $x, float $y): bool
    {
        return NSBezierPath::containsPoint($path, $x, $y);
    }
}

if (! function_exists('ns_bezierpath_get_bounds')) {
    function ns_bezierpath_get_bounds(int $path): array
    {
        return NSBezierPath::getBounds($path);
    }
}

if (! function_exists('ns_bezierpath_fill_rect')) {
    function ns_bezierpath_fill_rect(float $x, float $y, float $width, float $height): void
    {
        NSBezierPath::fillRect($x, $y, $width, $height);
    }
}

if (! function_exists('ns_bezierpath_stroke_rect')) {
    function ns_bezierpath_stroke_rect(float $x, float $y, float $width, float $height): void
    {
        NSBezierPath::strokeRect($x, $y, $width, $height);
    }
}

if (! function_exists('ns_bezierpath_clip_rect')) {
    function ns_bezierpath_clip_rect(float $x, float $y, float $width, float $height): void
    {
        NSBezierPath::clipRect($x, $y, $width, $height);
    }
}

if (! function_exists('ns_bezierpath_stroke_line_from_point')) {
    function ns_bezierpath_stroke_line_from_point(float $x1, float $y1, float $x2, float $y2): void
    {
        NSBezierPath::strokeLineFromPoint($x1, $y1, $x2, $y2);
    }
}
