<?php

use AppKit\NS\NSSpellChecker\NSSpellChecker;

/*
| NSSpellChecker helpers — 1:1 over AppKit\NS\NSSpellChecker\NSSpellChecker
*/

if (! function_exists('ns_spellchecker_shared')) {
    function ns_spellchecker_shared(): int
    {
        return NSSpellChecker::shared();
    }
}

if (! function_exists('ns_spellchecker_destroy')) {
    function ns_spellchecker_destroy(int $checker): void
    {
        NSSpellChecker::destroy($checker);
    }
}

if (! function_exists('ns_spellchecker_unique_spell_document_tag')) {
    function ns_spellchecker_unique_spell_document_tag(): int
    {
        return NSSpellChecker::uniqueSpellDocumentTag();
    }
}

if (! function_exists('ns_spellchecker_check_spelling')) {
    function ns_spellchecker_check_spelling(int $checker, string $text, int $startingAt = 0): array
    {
        return NSSpellChecker::checkSpelling($checker, $text, $startingAt);
    }
}

if (! function_exists('ns_spellchecker_count_words_in_string')) {
    function ns_spellchecker_count_words_in_string(int $checker, string $text, string $language = ''): int
    {
        return NSSpellChecker::countWordsInString($checker, $text, $language);
    }
}

if (! function_exists('ns_spellchecker_ignore_word')) {
    function ns_spellchecker_ignore_word(int $checker, string $word, int $tag): void
    {
        NSSpellChecker::ignoreWord($checker, $word, $tag);
    }
}

if (! function_exists('ns_spellchecker_ignored_words_count')) {
    function ns_spellchecker_ignored_words_count(int $checker, int $tag): int
    {
        return NSSpellChecker::ignoredWordsCount($checker, $tag);
    }
}

if (! function_exists('ns_spellchecker_ignored_word_at')) {
    function ns_spellchecker_ignored_word_at(int $checker, int $tag, int $index): string
    {
        return NSSpellChecker::ignoredWordsAt($checker, $tag, $index);
    }
}

if (! function_exists('ns_spellchecker_update_spelling_panel_with_misspelled_word')) {
    function ns_spellchecker_update_spelling_panel_with_misspelled_word(int $checker, string $word): void
    {
        NSSpellChecker::updateSpellingPanelWithMisspelledWord($checker, $word);
    }
}

if (! function_exists('ns_spellchecker_update_panels')) {
    function ns_spellchecker_update_panels(int $checker): void
    {
        NSSpellChecker::updatePanels($checker);
    }
}

if (! function_exists('ns_spellchecker_is_automatic_spelling_correction_enabled')) {
    function ns_spellchecker_is_automatic_spelling_correction_enabled(int $checker): bool
    {
        return NSSpellChecker::isAutomaticSpellingCorrectionEnabled($checker);
    }
}

if (! function_exists('ns_spellchecker_set_automatic_spelling_correction_enabled')) {
    function ns_spellchecker_set_automatic_spelling_correction_enabled(int $checker, bool $flag): void
    {
        NSSpellChecker::setAutomaticSpellingCorrectionEnabled($checker, $flag);
    }
}
