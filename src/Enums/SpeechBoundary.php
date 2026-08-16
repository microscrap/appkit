<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSSpeechBoundary` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum SpeechBoundary: int
{
    case SPEECH_IMMEDIATE_BOUNDARY = 0;
    case SPEECH_WORD_BOUNDARY = 1;
    case SPEECH_SENTENCE_BOUNDARY = 2;
}
