<?php

use AppKit\NS\NSFilePromiseProvider\NSFilePromiseProvider;

/*
| NSFilePromiseProvider helpers — 1:1 over AppKit\NS\NSFilePromiseProvider\NSFilePromiseProvider
*/

if (! function_exists('ns_filepromiseprovider_create')) {
    function ns_filepromiseprovider_create(string $fileType): int
    {
        return NSFilePromiseProvider::create($fileType);
    }
}

if (! function_exists('ns_filepromiseprovider_wrap')) {
    function ns_filepromiseprovider_wrap(int $nsFilePromiseProviderPtr): int
    {
        return NSFilePromiseProvider::wrap($nsFilePromiseProviderPtr);
    }
}

if (! function_exists('ns_filepromiseprovider_destroy')) {
    function ns_filepromiseprovider_destroy(int $provider): void
    {
        NSFilePromiseProvider::destroy($provider);
    }
}

if (! function_exists('ns_filepromiseprovider_nsfilepromiseprovider')) {
    function ns_filepromiseprovider_nsfilepromiseprovider(int $provider): int
    {
        return NSFilePromiseProvider::nsFilePromiseProvider($provider);
    }
}

if (! function_exists('ns_filepromiseprovider_set_file_type')) {
    function ns_filepromiseprovider_set_file_type(int $provider, string $fileType): void
    {
        NSFilePromiseProvider::setFileType($provider, $fileType);
    }
}

if (! function_exists('ns_filepromiseprovider_get_file_type')) {
    function ns_filepromiseprovider_get_file_type(int $provider): string
    {
        return NSFilePromiseProvider::getFileType($provider);
    }
}

if (! function_exists('ns_filepromiseprovider_set_user_info_tag')) {
    function ns_filepromiseprovider_set_user_info_tag(int $provider, int $tag): void
    {
        NSFilePromiseProvider::setUserInfoTag($provider, $tag);
    }
}

if (! function_exists('ns_filepromiseprovider_get_user_info_tag')) {
    function ns_filepromiseprovider_get_user_info_tag(int $provider): int
    {
        return NSFilePromiseProvider::getUserInfoTag($provider);
    }
}

if (! function_exists('ns_filepromiseprovider_set_file_name')) {
    function ns_filepromiseprovider_set_file_name(int $provider, string $fileName): void
    {
        NSFilePromiseProvider::setFileName($provider, $fileName);
    }
}

if (! function_exists('ns_filepromiseprovider_poll_write_request')) {
    function ns_filepromiseprovider_poll_write_request(int $provider): array
    {
        return NSFilePromiseProvider::pollWriteRequest($provider);
    }
}

if (! function_exists('ns_filepromiseprovider_complete_write')) {
    function ns_filepromiseprovider_complete_write(int $provider, bool $success): void
    {
        NSFilePromiseProvider::completeWrite($provider, $success);
    }
}
