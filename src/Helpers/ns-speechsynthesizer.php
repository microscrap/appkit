<?php

use AppKit\NS\NSSpeechSynthesizer\NSSpeechSynthesizer;
use Microscrap\Bindings\AppKit\Enums\SpeechBoundary;

/*
| NSSpeechSynthesizer helpers — 1:1 over AppKit\NS\NSSpeechSynthesizer\NSSpeechSynthesizer
*/

if (! function_exists('ns_speechsynthesizer_create')) {
    function ns_speechsynthesizer_create(string $voice = ''): int
    {
        return NSSpeechSynthesizer::create($voice);
    }
}

if (! function_exists('ns_speechsynthesizer_wrap')) {
    function ns_speechsynthesizer_wrap(int $nsSpeechSynthesizerPtr): int
    {
        return NSSpeechSynthesizer::wrap($nsSpeechSynthesizerPtr);
    }
}

if (! function_exists('ns_speechsynthesizer_destroy')) {
    function ns_speechsynthesizer_destroy(int $synthesizer): void
    {
        NSSpeechSynthesizer::destroy($synthesizer);
    }
}

if (! function_exists('ns_speechsynthesizer_nsspeechsynthesizer')) {
    function ns_speechsynthesizer_nsspeechsynthesizer(int $synthesizer): int
    {
        return NSSpeechSynthesizer::nsSpeechSynthesizer($synthesizer);
    }
}

if (! function_exists('ns_speechsynthesizer_start_speaking_string')) {
    function ns_speechsynthesizer_start_speaking_string(int $synthesizer, string $text): bool
    {
        return NSSpeechSynthesizer::startSpeakingString($synthesizer, $text);
    }
}

if (! function_exists('ns_speechsynthesizer_start_speaking_string_to_url')) {
    function ns_speechsynthesizer_start_speaking_string_to_url(int $synthesizer, string $text, string $url): bool
    {
        return NSSpeechSynthesizer::startSpeakingStringToURL($synthesizer, $text, $url);
    }
}

if (! function_exists('ns_speechsynthesizer_is_speaking')) {
    function ns_speechsynthesizer_is_speaking(int $synthesizer): bool
    {
        return NSSpeechSynthesizer::isSpeaking($synthesizer);
    }
}

if (! function_exists('ns_speechsynthesizer_stop_speaking')) {
    function ns_speechsynthesizer_stop_speaking(int $synthesizer): void
    {
        NSSpeechSynthesizer::stopSpeaking($synthesizer);
    }
}

if (! function_exists('ns_speechsynthesizer_stop_speaking_at_boundary')) {
    function ns_speechsynthesizer_stop_speaking_at_boundary(int $synthesizer, SpeechBoundary|int $boundary): void
    {
        NSSpeechSynthesizer::stopSpeakingAtBoundary(
            $synthesizer,
            $boundary instanceof SpeechBoundary ? $boundary->value : $boundary
        );
    }
}

if (! function_exists('ns_speechsynthesizer_pause_speaking_at_boundary')) {
    function ns_speechsynthesizer_pause_speaking_at_boundary(int $synthesizer, SpeechBoundary|int $boundary): void
    {
        NSSpeechSynthesizer::pauseSpeakingAtBoundary(
            $synthesizer,
            $boundary instanceof SpeechBoundary ? $boundary->value : $boundary
        );
    }
}

if (! function_exists('ns_speechsynthesizer_continue_speaking')) {
    function ns_speechsynthesizer_continue_speaking(int $synthesizer): void
    {
        NSSpeechSynthesizer::continueSpeaking($synthesizer);
    }
}

if (! function_exists('ns_speechsynthesizer_voice')) {
    function ns_speechsynthesizer_voice(int $synthesizer): string
    {
        return NSSpeechSynthesizer::voice($synthesizer);
    }
}

if (! function_exists('ns_speechsynthesizer_set_voice')) {
    function ns_speechsynthesizer_set_voice(int $synthesizer, string $voice): bool
    {
        return NSSpeechSynthesizer::setVoice($synthesizer, $voice);
    }
}

if (! function_exists('ns_speechsynthesizer_rate')) {
    function ns_speechsynthesizer_rate(int $synthesizer): float
    {
        return NSSpeechSynthesizer::rate($synthesizer);
    }
}

if (! function_exists('ns_speechsynthesizer_set_rate')) {
    function ns_speechsynthesizer_set_rate(int $synthesizer, float $rate): void
    {
        NSSpeechSynthesizer::setRate($synthesizer, $rate);
    }
}

if (! function_exists('ns_speechsynthesizer_volume')) {
    function ns_speechsynthesizer_volume(int $synthesizer): float
    {
        return NSSpeechSynthesizer::volume($synthesizer);
    }
}

if (! function_exists('ns_speechsynthesizer_set_volume')) {
    function ns_speechsynthesizer_set_volume(int $synthesizer, float $volume): void
    {
        NSSpeechSynthesizer::setVolume($synthesizer, $volume);
    }
}

if (! function_exists('ns_speechsynthesizer_uses_feedback_window')) {
    function ns_speechsynthesizer_uses_feedback_window(int $synthesizer): bool
    {
        return NSSpeechSynthesizer::usesFeedbackWindow($synthesizer);
    }
}

if (! function_exists('ns_speechsynthesizer_set_uses_feedback_window')) {
    function ns_speechsynthesizer_set_uses_feedback_window(int $synthesizer, bool $flag): void
    {
        NSSpeechSynthesizer::setUsesFeedbackWindow($synthesizer, $flag);
    }
}

if (! function_exists('ns_speechsynthesizer_phonemes_from_text')) {
    function ns_speechsynthesizer_phonemes_from_text(int $synthesizer, string $text): string
    {
        return NSSpeechSynthesizer::phonemesFromText($synthesizer, $text);
    }
}

if (! function_exists('ns_speechsynthesizer_is_any_application_speaking')) {
    function ns_speechsynthesizer_is_any_application_speaking(): bool
    {
        return NSSpeechSynthesizer::isAnyApplicationSpeaking();
    }
}

if (! function_exists('ns_speechsynthesizer_default_voice')) {
    function ns_speechsynthesizer_default_voice(): string
    {
        return NSSpeechSynthesizer::defaultVoice();
    }
}

if (! function_exists('ns_speechsynthesizer_available_voices_count')) {
    function ns_speechsynthesizer_available_voices_count(): int
    {
        return NSSpeechSynthesizer::availableVoicesCount();
    }
}

if (! function_exists('ns_speechsynthesizer_available_voice_at')) {
    function ns_speechsynthesizer_available_voice_at(int $index): string
    {
        return NSSpeechSynthesizer::availableVoiceAt($index);
    }
}

if (! function_exists('ns_speechsynthesizer_attribute_for_voice')) {
    function ns_speechsynthesizer_attribute_for_voice(string $voice, string $key): string
    {
        return NSSpeechSynthesizer::attributeForVoice($voice, $key);
    }
}
