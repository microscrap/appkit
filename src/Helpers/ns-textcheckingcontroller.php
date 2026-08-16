<?php

use AppKit\NS\NSTextCheckingController\NSTextCheckingController;

/*
| NSTextCheckingController helpers — 1:1 over AppKit\NS\NSTextCheckingController\NSTextCheckingController
*/

if (! function_exists('ns_textcheckingcontroller_create_with_client')) {
    function ns_textcheckingcontroller_create_with_client(int $clientPtr): int
    {
        return NSTextCheckingController::createWithClient($clientPtr);
    }
}

if (! function_exists('ns_textcheckingcontroller_wrap')) {
    function ns_textcheckingcontroller_wrap(int $nsTextCheckingControllerPtr): int
    {
        return NSTextCheckingController::wrap($nsTextCheckingControllerPtr);
    }
}

if (! function_exists('ns_textcheckingcontroller_destroy')) {
    function ns_textcheckingcontroller_destroy(int $controller): void
    {
        NSTextCheckingController::destroy($controller);
    }
}

if (! function_exists('ns_textcheckingcontroller_nstextcheckingcontroller')) {
    function ns_textcheckingcontroller_nstextcheckingcontroller(int $controller): int
    {
        return NSTextCheckingController::nsTextCheckingController($controller);
    }
}

if (! function_exists('ns_textcheckingcontroller_client')) {
    function ns_textcheckingcontroller_client(int $controller): int
    {
        return NSTextCheckingController::client($controller);
    }
}

if (! function_exists('ns_textcheckingcontroller_invalidate')) {
    function ns_textcheckingcontroller_invalidate(int $controller): void
    {
        NSTextCheckingController::invalidate($controller);
    }
}

if (! function_exists('ns_textcheckingcontroller_did_change_text_in_range')) {
    function ns_textcheckingcontroller_did_change_text_in_range(int $controller, int $location, int $length): void
    {
        NSTextCheckingController::didChangeTextInRange($controller, $location, $length);
    }
}

if (! function_exists('ns_textcheckingcontroller_inserted_text_in_range')) {
    function ns_textcheckingcontroller_inserted_text_in_range(int $controller, int $location, int $length): void
    {
        NSTextCheckingController::insertedTextInRange($controller, $location, $length);
    }
}

if (! function_exists('ns_textcheckingcontroller_did_change_selected_range')) {
    function ns_textcheckingcontroller_did_change_selected_range(int $controller): void
    {
        NSTextCheckingController::didChangeSelectedRange($controller);
    }
}

if (! function_exists('ns_textcheckingcontroller_consider_text_checking_for_range')) {
    function ns_textcheckingcontroller_consider_text_checking_for_range(int $controller, int $location, int $length): void
    {
        NSTextCheckingController::considerTextCheckingForRange($controller, $location, $length);
    }
}

if (! function_exists('ns_textcheckingcontroller_check_text_in_range')) {
    function ns_textcheckingcontroller_check_text_in_range(int $controller, int $location, int $length, int $types, int $options = 0): void
    {
        NSTextCheckingController::checkTextInRange($controller, $location, $length, $types, $options);
    }
}

if (! function_exists('ns_textcheckingcontroller_check_text_in_selection')) {
    function ns_textcheckingcontroller_check_text_in_selection(int $controller): void
    {
        NSTextCheckingController::checkTextInSelection($controller);
    }
}

if (! function_exists('ns_textcheckingcontroller_check_text_in_document')) {
    function ns_textcheckingcontroller_check_text_in_document(int $controller): void
    {
        NSTextCheckingController::checkTextInDocument($controller);
    }
}

if (! function_exists('ns_textcheckingcontroller_order_front_substitutions_panel')) {
    function ns_textcheckingcontroller_order_front_substitutions_panel(int $controller): void
    {
        NSTextCheckingController::orderFrontSubstitutionsPanel($controller);
    }
}

if (! function_exists('ns_textcheckingcontroller_check_spelling')) {
    function ns_textcheckingcontroller_check_spelling(int $controller): void
    {
        NSTextCheckingController::checkSpelling($controller);
    }
}

if (! function_exists('ns_textcheckingcontroller_show_guess_panel')) {
    function ns_textcheckingcontroller_show_guess_panel(int $controller): void
    {
        NSTextCheckingController::showGuessPanel($controller);
    }
}

if (! function_exists('ns_textcheckingcontroller_change_spelling')) {
    function ns_textcheckingcontroller_change_spelling(int $controller): void
    {
        NSTextCheckingController::changeSpelling($controller);
    }
}

if (! function_exists('ns_textcheckingcontroller_ignore_spelling')) {
    function ns_textcheckingcontroller_ignore_spelling(int $controller): void
    {
        NSTextCheckingController::ignoreSpelling($controller);
    }
}

if (! function_exists('ns_textcheckingcontroller_update_candidates')) {
    function ns_textcheckingcontroller_update_candidates(int $controller): void
    {
        NSTextCheckingController::updateCandidates($controller);
    }
}

if (! function_exists('ns_textcheckingcontroller_get_valid_annotations')) {
    function ns_textcheckingcontroller_get_valid_annotations(int $controller): array
    {
        return NSTextCheckingController::getValidAnnotations($controller);
    }
}

if (! function_exists('ns_textcheckingcontroller_set_spell_checker_document_tag')) {
    function ns_textcheckingcontroller_set_spell_checker_document_tag(int $controller, int $tag): void
    {
        NSTextCheckingController::setSpellCheckerDocumentTag($controller, $tag);
    }
}

if (! function_exists('ns_textcheckingcontroller_get_spell_checker_document_tag')) {
    function ns_textcheckingcontroller_get_spell_checker_document_tag(int $controller): int
    {
        return NSTextCheckingController::getSpellCheckerDocumentTag($controller);
    }
}

if (! function_exists('ns_textcheckingcontroller_menu_at_index')) {
    function ns_textcheckingcontroller_menu_at_index(int $controller, int $location, bool $clickedOnSelection): array
    {
        return NSTextCheckingController::menuAtIndex($controller, $location, $clickedOnSelection);
    }
}
