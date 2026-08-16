<?php

use AppKit\NS\NSDocument\NSDocument;
use Microscrap\Bindings\AppKit\Enums\DocumentChangeType;

/*
| NSDocument helpers — 1:1 over AppKit\NS\NSDocument\NSDocument
*/

if (! function_exists('ns_document_create')) {
    function ns_document_create(): int
    {
        return NSDocument::create();
    }
}

if (! function_exists('ns_document_wrap')) {
    function ns_document_wrap(int $nsDocumentPtr): int
    {
        return NSDocument::wrap($nsDocumentPtr);
    }
}

if (! function_exists('ns_document_destroy')) {
    function ns_document_destroy(int $document): void
    {
        NSDocument::destroy($document);
    }
}

if (! function_exists('ns_document_nsdocument')) {
    function ns_document_nsdocument(int $document): int
    {
        return NSDocument::nsDocument($document);
    }
}

if (! function_exists('ns_document_init_with_type')) {
    function ns_document_init_with_type(string $typeName): int
    {
        return NSDocument::initWithType($typeName);
    }
}

if (! function_exists('ns_document_init_with_contents_of_url')) {
    function ns_document_init_with_contents_of_url(string $url, string $typeName): int
    {
        return NSDocument::initWithContentsOfURL($url, $typeName);
    }
}

if (! function_exists('ns_document_get_file_type')) {
    function ns_document_get_file_type(int $document): string
    {
        return NSDocument::getFileType($document);
    }
}

if (! function_exists('ns_document_set_file_type')) {
    function ns_document_set_file_type(int $document, string $typeName): void
    {
        NSDocument::setFileType($document, $typeName);
    }
}

if (! function_exists('ns_document_get_file_url')) {
    function ns_document_get_file_url(int $document): string
    {
        return NSDocument::getFileURL($document);
    }
}

if (! function_exists('ns_document_set_file_url')) {
    function ns_document_set_file_url(int $document, string $url): void
    {
        NSDocument::setFileURL($document, $url);
    }
}

if (! function_exists('ns_document_get_display_name')) {
    function ns_document_get_display_name(int $document): string
    {
        return NSDocument::getDisplayName($document);
    }
}

if (! function_exists('ns_document_set_display_name')) {
    function ns_document_set_display_name(int $document, string $name): void
    {
        NSDocument::setDisplayName($document, $name);
    }
}

if (! function_exists('ns_document_is_document_edited')) {
    function ns_document_is_document_edited(int $document): bool
    {
        return NSDocument::isDocumentEdited($document);
    }
}

if (! function_exists('ns_document_has_unautosaved_changes')) {
    function ns_document_has_unautosaved_changes(int $document): bool
    {
        return NSDocument::hasUnautosavedChanges($document);
    }
}

if (! function_exists('ns_document_is_draft')) {
    function ns_document_is_draft(int $document): bool
    {
        return NSDocument::isDraft($document);
    }
}

if (! function_exists('ns_document_set_draft')) {
    function ns_document_set_draft(int $document, bool $draft): void
    {
        NSDocument::setDraft($document, $draft);
    }
}

if (! function_exists('ns_document_is_entire_file_loaded')) {
    function ns_document_is_entire_file_loaded(int $document): bool
    {
        return NSDocument::isEntireFileLoaded($document);
    }
}

if (! function_exists('ns_document_update_change_count')) {
    function ns_document_update_change_count(int $document, DocumentChangeType|int $changeType): void
    {
        NSDocument::updateChangeCount(
            $document,
            $changeType instanceof DocumentChangeType ? $changeType->value : $changeType,
        );
    }
}

if (! function_exists('ns_document_close')) {
    function ns_document_close(int $document): void
    {
        NSDocument::close($document);
    }
}

if (! function_exists('ns_document_make_window_controllers')) {
    function ns_document_make_window_controllers(int $document): void
    {
        NSDocument::makeWindowControllers($document);
    }
}

if (! function_exists('ns_document_show_windows')) {
    function ns_document_show_windows(int $document): void
    {
        NSDocument::showWindows($document);
    }
}

if (! function_exists('ns_document_window_controllers_count')) {
    function ns_document_window_controllers_count(int $document): int
    {
        return NSDocument::windowControllersCount($document);
    }
}

if (! function_exists('ns_document_window_controller_at')) {
    function ns_document_window_controller_at(int $document, int $index): int
    {
        return NSDocument::windowControllerAt($document, $index);
    }
}

if (! function_exists('ns_document_add_window_controller')) {
    function ns_document_add_window_controller(int $document, int $windowController): void
    {
        NSDocument::addWindowController($document, $windowController);
    }
}

if (! function_exists('ns_document_remove_window_controller')) {
    function ns_document_remove_window_controller(int $document, int $windowController): void
    {
        NSDocument::removeWindowController($document, $windowController);
    }
}

if (! function_exists('ns_document_read_from_url')) {
    function ns_document_read_from_url(int $document, string $url, string $typeName): bool
    {
        return NSDocument::readFromURL($document, $url, $typeName);
    }
}

if (! function_exists('ns_document_write_to_url')) {
    function ns_document_write_to_url(int $document, string $url, string $typeName): bool
    {
        return NSDocument::writeToURL($document, $url, $typeName);
    }
}

if (! function_exists('ns_document_revert_to_contents_of_url')) {
    function ns_document_revert_to_contents_of_url(int $document, string $url, string $typeName): bool
    {
        return NSDocument::revertToContentsOfURL($document, $url, $typeName);
    }
}

if (! function_exists('ns_document_get_window_nib_name')) {
    function ns_document_get_window_nib_name(int $document): string
    {
        return NSDocument::getWindowNibName($document);
    }
}

if (! function_exists('ns_document_get_autosaving_file_type')) {
    function ns_document_get_autosaving_file_type(int $document): string
    {
        return NSDocument::getAutosavingFileType($document);
    }
}
