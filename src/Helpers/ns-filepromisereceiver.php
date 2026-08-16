<?php

use AppKit\NS\NSFilePromiseReceiver\NSFilePromiseReceiver;

/*
| NSFilePromiseReceiver helpers — 1:1 over AppKit\NS\NSFilePromiseReceiver\NSFilePromiseReceiver
*/

if (! function_exists('ns_filepromisereceiver_readable_dragged_types')) {
    function ns_filepromisereceiver_readable_dragged_types(): array
    {
        return NSFilePromiseReceiver::readableDraggedTypes();
    }
}

if (! function_exists('ns_filepromisereceiver_wrap')) {
    function ns_filepromisereceiver_wrap(int $nsFilePromiseReceiverPtr): int
    {
        return NSFilePromiseReceiver::wrap($nsFilePromiseReceiverPtr);
    }
}

if (! function_exists('ns_filepromisereceiver_destroy')) {
    function ns_filepromisereceiver_destroy(int $receiver): void
    {
        NSFilePromiseReceiver::destroy($receiver);
    }
}

if (! function_exists('ns_filepromisereceiver_nsfilepromisereceiver')) {
    function ns_filepromisereceiver_nsfilepromisereceiver(int $receiver): int
    {
        return NSFilePromiseReceiver::nsFilePromiseReceiver($receiver);
    }
}

if (! function_exists('ns_filepromisereceiver_file_types')) {
    function ns_filepromisereceiver_file_types(int $receiver): array
    {
        return NSFilePromiseReceiver::fileTypes($receiver);
    }
}

if (! function_exists('ns_filepromisereceiver_file_names')) {
    function ns_filepromisereceiver_file_names(int $receiver): array
    {
        return NSFilePromiseReceiver::fileNames($receiver);
    }
}

if (! function_exists('ns_filepromisereceiver_receive_at_destination')) {
    function ns_filepromisereceiver_receive_at_destination(int $receiver, string $destinationPath): void
    {
        NSFilePromiseReceiver::receiveAtDestination($receiver, $destinationPath);
    }
}

if (! function_exists('ns_filepromisereceiver_poll_received_file')) {
    function ns_filepromisereceiver_poll_received_file(int $receiver): array
    {
        return NSFilePromiseReceiver::pollReceivedFile($receiver);
    }
}
