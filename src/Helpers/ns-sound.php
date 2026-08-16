<?php

use AppKit\NS\NSSound\NSSound;

/*
| NSSound helpers — 1:1 over AppKit\NS\NSSound\NSSound
*/

if (! function_exists('ns_sound_sound_named')) {
    function ns_sound_sound_named(string $name): int
    {
        return NSSound::soundNamed($name);
    }
}

if (! function_exists('ns_sound_create_with_contents_of_file')) {
    function ns_sound_create_with_contents_of_file(string $path, bool $byRef = false): int
    {
        return NSSound::createWithContentsOfFile($path, $byRef);
    }
}

if (! function_exists('ns_sound_create_with_contents_of_url')) {
    function ns_sound_create_with_contents_of_url(string $url, bool $byRef = false): int
    {
        return NSSound::createWithContentsOfURL($url, $byRef);
    }
}

if (! function_exists('ns_sound_wrap')) {
    function ns_sound_wrap(int $nsSoundPtr): int
    {
        return NSSound::wrap($nsSoundPtr);
    }
}

if (! function_exists('ns_sound_destroy')) {
    function ns_sound_destroy(int $sound): void
    {
        NSSound::destroy($sound);
    }
}

if (! function_exists('ns_sound_nssound')) {
    function ns_sound_nssound(int $sound): int
    {
        return NSSound::nsSound($sound);
    }
}

if (! function_exists('ns_sound_set_name')) {
    function ns_sound_set_name(int $sound, string $name): bool
    {
        return NSSound::setName($sound, $name);
    }
}

if (! function_exists('ns_sound_name')) {
    function ns_sound_name(int $sound): string
    {
        return NSSound::name($sound);
    }
}

if (! function_exists('ns_sound_play')) {
    function ns_sound_play(int $sound): bool
    {
        return NSSound::play($sound);
    }
}

if (! function_exists('ns_sound_pause')) {
    function ns_sound_pause(int $sound): bool
    {
        return NSSound::pause($sound);
    }
}

if (! function_exists('ns_sound_resume')) {
    function ns_sound_resume(int $sound): bool
    {
        return NSSound::resume($sound);
    }
}

if (! function_exists('ns_sound_stop')) {
    function ns_sound_stop(int $sound): bool
    {
        return NSSound::stop($sound);
    }
}

if (! function_exists('ns_sound_is_playing')) {
    function ns_sound_is_playing(int $sound): bool
    {
        return NSSound::isPlaying($sound);
    }
}

if (! function_exists('ns_sound_duration')) {
    function ns_sound_duration(int $sound): float
    {
        return NSSound::duration($sound);
    }
}

if (! function_exists('ns_sound_volume')) {
    function ns_sound_volume(int $sound): float
    {
        return NSSound::volume($sound);
    }
}

if (! function_exists('ns_sound_set_volume')) {
    function ns_sound_set_volume(int $sound, float $volume): void
    {
        NSSound::setVolume($sound, $volume);
    }
}

if (! function_exists('ns_sound_current_time')) {
    function ns_sound_current_time(int $sound): float
    {
        return NSSound::currentTime($sound);
    }
}

if (! function_exists('ns_sound_set_current_time')) {
    function ns_sound_set_current_time(int $sound, float $seconds): void
    {
        NSSound::setCurrentTime($sound, $seconds);
    }
}

if (! function_exists('ns_sound_loops')) {
    function ns_sound_loops(int $sound): bool
    {
        return NSSound::loops($sound);
    }
}

if (! function_exists('ns_sound_set_loops')) {
    function ns_sound_set_loops(int $sound, bool $loops): void
    {
        NSSound::setLoops($sound, $loops);
    }
}

if (! function_exists('ns_sound_playback_device_identifier')) {
    function ns_sound_playback_device_identifier(int $sound): string
    {
        return NSSound::playbackDeviceIdentifier($sound);
    }
}

if (! function_exists('ns_sound_set_playback_device_identifier')) {
    function ns_sound_set_playback_device_identifier(int $sound, string $identifier): void
    {
        NSSound::setPlaybackDeviceIdentifier($sound, $identifier);
    }
}

if (! function_exists('ns_sound_can_init_with_pasteboard')) {
    function ns_sound_can_init_with_pasteboard(int $pasteboard): bool
    {
        return NSSound::canInitWithPasteboard($pasteboard);
    }
}

if (! function_exists('ns_sound_create_with_pasteboard')) {
    function ns_sound_create_with_pasteboard(int $pasteboard): int
    {
        return NSSound::createWithPasteboard($pasteboard);
    }
}

if (! function_exists('ns_sound_write_to_pasteboard')) {
    function ns_sound_write_to_pasteboard(int $sound, int $pasteboard): void
    {
        NSSound::writeToPasteboard($sound, $pasteboard);
    }
}

if (! function_exists('ns_sound_unfiltered_types_count')) {
    function ns_sound_unfiltered_types_count(): int
    {
        return NSSound::unfilteredTypesCount();
    }
}

if (! function_exists('ns_sound_unfiltered_type_at')) {
    function ns_sound_unfiltered_type_at(int $index): string
    {
        return NSSound::unfilteredTypeAt($index);
    }
}
