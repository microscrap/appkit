<?php

use AppKit\NS\NSProtocol\NSProtocol;

/*
| NSProtocol helpers — 1:1 over AppKit\NS\NSProtocol\NSProtocol
*/

if (! function_exists('ns_protocol_attach')) {
    function ns_protocol_attach(int $handle, string $protocolName): bool
    {
        return NSProtocol::attach($handle, $protocolName);
    }
}

if (! function_exists('ns_protocol_poll')) {
    function ns_protocol_poll(string $protocolName): array
    {
        return NSProtocol::poll($protocolName);
    }
}

if (! function_exists('ns_protocol_known_count')) {
    function ns_protocol_known_count(): int
    {
        return NSProtocol::knownCount();
    }
}

if (! function_exists('ns_protocol_known_at')) {
    function ns_protocol_known_at(int $index): string
    {
        return NSProtocol::knownAt($index);
    }
}
