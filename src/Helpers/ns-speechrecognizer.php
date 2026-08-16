<?php

use AppKit\NS\NSSpeechRecognizer\NSSpeechRecognizer;

/*
| NSSpeechRecognizer helpers — 1:1 over AppKit\NS\NSSpeechRecognizer\NSSpeechRecognizer
*/

if (! function_exists('ns_speechrecognizer_create')) {
    function ns_speechrecognizer_create(): int
    {
        return NSSpeechRecognizer::create();
    }
}

if (! function_exists('ns_speechrecognizer_wrap')) {
    function ns_speechrecognizer_wrap(int $nsSpeechRecognizerPtr): int
    {
        return NSSpeechRecognizer::wrap($nsSpeechRecognizerPtr);
    }
}

if (! function_exists('ns_speechrecognizer_destroy')) {
    function ns_speechrecognizer_destroy(int $recognizer): void
    {
        NSSpeechRecognizer::destroy($recognizer);
    }
}

if (! function_exists('ns_speechrecognizer_nsspeechrecognizer')) {
    function ns_speechrecognizer_nsspeechrecognizer(int $recognizer): int
    {
        return NSSpeechRecognizer::nsSpeechRecognizer($recognizer);
    }
}

if (! function_exists('ns_speechrecognizer_start_listening')) {
    function ns_speechrecognizer_start_listening(int $recognizer): void
    {
        NSSpeechRecognizer::startListening($recognizer);
    }
}

if (! function_exists('ns_speechrecognizer_stop_listening')) {
    function ns_speechrecognizer_stop_listening(int $recognizer): void
    {
        NSSpeechRecognizer::stopListening($recognizer);
    }
}

if (! function_exists('ns_speechrecognizer_set_commands')) {
    function ns_speechrecognizer_set_commands(int $recognizer, array $commands): void
    {
        NSSpeechRecognizer::setCommands($recognizer, $commands);
    }
}

if (! function_exists('ns_speechrecognizer_commands_count')) {
    function ns_speechrecognizer_commands_count(int $recognizer): int
    {
        return NSSpeechRecognizer::commandsCount($recognizer);
    }
}

if (! function_exists('ns_speechrecognizer_command_at')) {
    function ns_speechrecognizer_command_at(int $recognizer, int $index): string
    {
        return NSSpeechRecognizer::commandAt($recognizer, $index);
    }
}

if (! function_exists('ns_speechrecognizer_displayed_commands_title')) {
    function ns_speechrecognizer_displayed_commands_title(int $recognizer): string
    {
        return NSSpeechRecognizer::displayedCommandsTitle($recognizer);
    }
}

if (! function_exists('ns_speechrecognizer_set_displayed_commands_title')) {
    function ns_speechrecognizer_set_displayed_commands_title(int $recognizer, string $title): void
    {
        NSSpeechRecognizer::setDisplayedCommandsTitle($recognizer, $title);
    }
}

if (! function_exists('ns_speechrecognizer_listens_in_foreground_only')) {
    function ns_speechrecognizer_listens_in_foreground_only(int $recognizer): bool
    {
        return NSSpeechRecognizer::listensInForegroundOnly($recognizer);
    }
}

if (! function_exists('ns_speechrecognizer_set_listens_in_foreground_only')) {
    function ns_speechrecognizer_set_listens_in_foreground_only(int $recognizer, bool $flag): void
    {
        NSSpeechRecognizer::setListensInForegroundOnly($recognizer, $flag);
    }
}

if (! function_exists('ns_speechrecognizer_blocks_other_recognizers')) {
    function ns_speechrecognizer_blocks_other_recognizers(int $recognizer): bool
    {
        return NSSpeechRecognizer::blocksOtherRecognizers($recognizer);
    }
}

if (! function_exists('ns_speechrecognizer_set_blocks_other_recognizers')) {
    function ns_speechrecognizer_set_blocks_other_recognizers(int $recognizer, bool $flag): void
    {
        NSSpeechRecognizer::setBlocksOtherRecognizers($recognizer, $flag);
    }
}
