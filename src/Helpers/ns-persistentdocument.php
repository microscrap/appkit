<?php

use AppKit\NS\NSPersistentDocument\NSPersistentDocument;
use Microscrap\Bindings\AppKit\Enums\SaveOperationType;

/*
| NSPersistentDocument helpers — 1:1 over AppKit\NS\NSPersistentDocument\NSPersistentDocument
*/

if (! function_exists('ns_persistentdocument_create')) {
    function ns_persistentdocument_create(): int
    {
        return NSPersistentDocument::create();
    }
}

if (! function_exists('ns_persistentdocument_wrap')) {
    function ns_persistentdocument_wrap(int $nsPersistentDocumentPtr): int
    {
        return NSPersistentDocument::wrap($nsPersistentDocumentPtr);
    }
}

if (! function_exists('ns_persistentdocument_destroy')) {
    function ns_persistentdocument_destroy(int $document): void
    {
        NSPersistentDocument::destroy($document);
    }
}

if (! function_exists('ns_persistentdocument_nspersistentdocument')) {
    function ns_persistentdocument_nspersistentdocument(int $document): int
    {
        return NSPersistentDocument::nsPersistentDocument($document);
    }
}

if (! function_exists('ns_persistentdocument_managed_object_context')) {
    function ns_persistentdocument_managed_object_context(int $document): int
    {
        return NSPersistentDocument::managedObjectContext($document);
    }
}

if (! function_exists('ns_persistentdocument_managed_object_model')) {
    function ns_persistentdocument_managed_object_model(int $document): int
    {
        return NSPersistentDocument::managedObjectModel($document);
    }
}

if (! function_exists('ns_persistentdocument_persistent_store_type_for_file_type')) {
    function ns_persistentdocument_persistent_store_type_for_file_type(int $document, string $fileType): string
    {
        return NSPersistentDocument::persistentStoreTypeForFileType($document, $fileType);
    }
}

if (! function_exists('ns_persistentdocument_read_from_url')) {
    function ns_persistentdocument_read_from_url(int $document, string $url, string $typeName): bool
    {
        return NSPersistentDocument::readFromURL($document, $url, $typeName);
    }
}

if (! function_exists('ns_persistentdocument_write_to_url')) {
    function ns_persistentdocument_write_to_url(
        int $document,
        string $url,
        string $typeName,
        SaveOperationType|int $saveOperation,
        string $originalURL = '',
    ): bool {
        return NSPersistentDocument::writeToURL(
            $document,
            $url,
            $typeName,
            $saveOperation instanceof SaveOperationType ? $saveOperation->value : $saveOperation,
            $originalURL,
        );
    }
}

if (! function_exists('ns_persistentdocument_revert_to_contents_of_url')) {
    function ns_persistentdocument_revert_to_contents_of_url(int $document, string $url, string $typeName): bool
    {
        return NSPersistentDocument::revertToContentsOfURL($document, $url, $typeName);
    }
}
