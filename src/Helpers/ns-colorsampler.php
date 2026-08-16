<?php

use AppKit\NS\NSColorSampler\NSColorSampler;

/*
| NSColorSampler helpers — 1:1 over AppKit\NS\NSColorSampler\NSColorSampler
*/

if (! function_exists('ns_colorsampler_create')) {
    function ns_colorsampler_create(): int
    {
        return NSColorSampler::create();
    }
}

if (! function_exists('ns_colorsampler_destroy')) {
    function ns_colorsampler_destroy(int $sampler): void
    {
        NSColorSampler::destroy($sampler);
    }
}

if (! function_exists('ns_colorsampler_show')) {
    function ns_colorsampler_show(int $sampler): void
    {
        NSColorSampler::show($sampler);
    }
}

if (! function_exists('ns_colorsampler_poll')) {
    function ns_colorsampler_poll(int $sampler): array
    {
        return NSColorSampler::poll($sampler);
    }
}
