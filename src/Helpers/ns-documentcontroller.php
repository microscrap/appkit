<?php

use AppKit\NS\NSDocumentController\NSDocumentController;

/*
| NSDocumentController helpers — 1:1 over AppKit\NS\NSDocumentController\NSDocumentController
*/

if (! function_exists('ns_documentcontroller_shared')) {
    function ns_documentcontroller_shared(): int
    {
        return NSDocumentController::shared();
    }
}

if (! function_exists('ns_documentcontroller_create')) {
    function ns_documentcontroller_create(): int
    {
        return NSDocumentController::create();
    }
}

if (! function_exists('ns_documentcontroller_wrap')) {
    function ns_documentcontroller_wrap(int $nsDocumentControllerPtr): int
    {
        return NSDocumentController::wrap($nsDocumentControllerPtr);
    }
}

if (! function_exists('ns_documentcontroller_destroy')) {
    function ns_documentcontroller_destroy(int $controller): void
    {
        NSDocumentController::destroy($controller);
    }
}

if (! function_exists('ns_documentcontroller_nsdocumentcontroller')) {
    function ns_documentcontroller_nsdocumentcontroller(int $controller): int
    {
        return NSDocumentController::nsDocumentController($controller);
    }
}

if (! function_exists('ns_documentcontroller_documents_count')) {
    function ns_documentcontroller_documents_count(int $controller): int
    {
        return NSDocumentController::documentsCount($controller);
    }
}

if (! function_exists('ns_documentcontroller_document_at')) {
    function ns_documentcontroller_document_at(int $controller, int $index): int
    {
        return NSDocumentController::documentAt($controller, $index);
    }
}

if (! function_exists('ns_documentcontroller_current_document')) {
    function ns_documentcontroller_current_document(int $controller): int
    {
        return NSDocumentController::currentDocument($controller);
    }
}

if (! function_exists('ns_documentcontroller_current_directory')) {
    function ns_documentcontroller_current_directory(int $controller): string
    {
        return NSDocumentController::currentDirectory($controller);
    }
}

if (! function_exists('ns_documentcontroller_document_for_url')) {
    function ns_documentcontroller_document_for_url(int $controller, string $url): int
    {
        return NSDocumentController::documentForURL($controller, $url);
    }
}

if (! function_exists('ns_documentcontroller_document_for_window')) {
    function ns_documentcontroller_document_for_window(int $controller, int $window): int
    {
        return NSDocumentController::documentForWindow($controller, $window);
    }
}

if (! function_exists('ns_documentcontroller_add_document')) {
    function ns_documentcontroller_add_document(int $controller, int $document): void
    {
        NSDocumentController::addDocument($controller, $document);
    }
}

if (! function_exists('ns_documentcontroller_remove_document')) {
    function ns_documentcontroller_remove_document(int $controller, int $document): void
    {
        NSDocumentController::removeDocument($controller, $document);
    }
}

if (! function_exists('ns_documentcontroller_default_type')) {
    function ns_documentcontroller_default_type(int $controller): string
    {
        return NSDocumentController::defaultType($controller);
    }
}

if (! function_exists('ns_documentcontroller_open_untitled_document_and_display')) {
    function ns_documentcontroller_open_untitled_document_and_display(int $controller, bool $displayDocument): int
    {
        return NSDocumentController::openUntitledDocumentAndDisplay($controller, $displayDocument);
    }
}

if (! function_exists('ns_documentcontroller_has_edited_documents')) {
    function ns_documentcontroller_has_edited_documents(int $controller): bool
    {
        return NSDocumentController::hasEditedDocuments($controller);
    }
}

if (! function_exists('ns_documentcontroller_document_class_names_count')) {
    function ns_documentcontroller_document_class_names_count(int $controller): int
    {
        return NSDocumentController::documentClassNamesCount($controller);
    }
}

if (! function_exists('ns_documentcontroller_document_class_name_at')) {
    function ns_documentcontroller_document_class_name_at(int $controller, int $index): string
    {
        return NSDocumentController::documentClassNameAt($controller, $index);
    }
}

if (! function_exists('ns_documentcontroller_display_name_for_type')) {
    function ns_documentcontroller_display_name_for_type(int $controller, string $typeName): string
    {
        return NSDocumentController::displayNameForType($controller, $typeName);
    }
}

if (! function_exists('ns_documentcontroller_recent_document_urls_count')) {
    function ns_documentcontroller_recent_document_urls_count(int $controller): int
    {
        return NSDocumentController::recentDocumentURLsCount($controller);
    }
}

if (! function_exists('ns_documentcontroller_recent_document_url_at')) {
    function ns_documentcontroller_recent_document_url_at(int $controller, int $index): string
    {
        return NSDocumentController::recentDocumentURLAt($controller, $index);
    }
}

if (! function_exists('ns_documentcontroller_note_new_recent_document')) {
    function ns_documentcontroller_note_new_recent_document(int $controller, int $document): void
    {
        NSDocumentController::noteNewRecentDocument($controller, $document);
    }
}

if (! function_exists('ns_documentcontroller_note_new_recent_document_url')) {
    function ns_documentcontroller_note_new_recent_document_url(int $controller, string $url): void
    {
        NSDocumentController::noteNewRecentDocumentURL($controller, $url);
    }
}

if (! function_exists('ns_documentcontroller_clear_recent_documents')) {
    function ns_documentcontroller_clear_recent_documents(int $controller): void
    {
        NSDocumentController::clearRecentDocuments($controller);
    }
}
