<?php

use AppKit\NS\NSDraggingImageComponent\NSDraggingImageComponent;

/*
| NSDraggingImageComponent helpers — 1:1 over AppKit\NS\NSDraggingImageComponent\NSDraggingImageComponent
*/

if (! function_exists('ns_draggingimagecomponent_with_key')) {
    function ns_draggingimagecomponent_with_key(string $key): int
    {
        return NSDraggingImageComponent::withKey($key);
    }
}

if (! function_exists('ns_draggingimagecomponent_wrap')) {
    function ns_draggingimagecomponent_wrap(int $nsDraggingImageComponentPtr): int
    {
        return NSDraggingImageComponent::wrap($nsDraggingImageComponentPtr);
    }
}

if (! function_exists('ns_draggingimagecomponent_destroy')) {
    function ns_draggingimagecomponent_destroy(int $component): void
    {
        NSDraggingImageComponent::destroy($component);
    }
}

if (! function_exists('ns_draggingimagecomponent_nsdraggingimagecomponent')) {
    function ns_draggingimagecomponent_nsdraggingimagecomponent(int $component): int
    {
        return NSDraggingImageComponent::nsDraggingImageComponent($component);
    }
}

if (! function_exists('ns_draggingimagecomponent_get_key')) {
    function ns_draggingimagecomponent_get_key(int $component): string
    {
        return NSDraggingImageComponent::getKey($component);
    }
}

if (! function_exists('ns_draggingimagecomponent_set_key')) {
    function ns_draggingimagecomponent_set_key(int $component, string $key): void
    {
        NSDraggingImageComponent::setKey($component, $key);
    }
}

if (! function_exists('ns_draggingimagecomponent_set_contents')) {
    function ns_draggingimagecomponent_set_contents(int $component, int $contentsPtr): void
    {
        NSDraggingImageComponent::setContents($component, $contentsPtr);
    }
}

if (! function_exists('ns_draggingimagecomponent_get_contents')) {
    function ns_draggingimagecomponent_get_contents(int $component): int
    {
        return NSDraggingImageComponent::getContents($component);
    }
}

if (! function_exists('ns_draggingimagecomponent_frame_rect')) {
    function ns_draggingimagecomponent_frame_rect(int $component): array
    {
        return NSDraggingImageComponent::frameRect($component);
    }
}

if (! function_exists('ns_draggingimagecomponent_set_frame_rect')) {
    function ns_draggingimagecomponent_set_frame_rect(int $component, float $x, float $y, float $width, float $height): void
    {
        NSDraggingImageComponent::setFrameRect($component, $x, $y, $width, $height);
    }
}
