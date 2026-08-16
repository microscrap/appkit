<?php

use AppKit\NS\NSResponder\NSResponder;

/*
| NSResponder helpers — 1:1 over AppKit\NS\NSResponder\NSResponder
*/

if (! function_exists('ns_responder_wrap')) {
    function ns_responder_wrap(int $nsResponderPtr): int
    {
        return NSResponder::wrap($nsResponderPtr);
    }
}

if (! function_exists('ns_responder_destroy')) {
    function ns_responder_destroy(int $responder): void
    {
        NSResponder::destroy($responder);
    }
}

if (! function_exists('ns_responder_nsresponder')) {
    function ns_responder_nsresponder(int $responder): int
    {
        return NSResponder::nsResponder($responder);
    }
}

if (! function_exists('ns_responder_accepts_first_responder')) {
    function ns_responder_accepts_first_responder(int $responder): bool
    {
        return NSResponder::acceptsFirstResponder($responder);
    }
}

if (! function_exists('ns_responder_become_first_responder')) {
    function ns_responder_become_first_responder(int $responder): bool
    {
        return NSResponder::becomeFirstResponder($responder);
    }
}

if (! function_exists('ns_responder_resign_first_responder')) {
    function ns_responder_resign_first_responder(int $responder): bool
    {
        return NSResponder::resignFirstResponder($responder);
    }
}

if (! function_exists('ns_responder_next_responder')) {
    function ns_responder_next_responder(int $responder): int
    {
        return NSResponder::nextResponder($responder);
    }
}
