<?php

use AppKit\NS\NSTextElement\NSTextElement;

/*
| NSTextElement helpers — 1:1 over AppKit\NS\NSTextElement\NSTextElement
*/

if (! function_exists('ns_textelement_wrap')) {
    function ns_textelement_wrap(int $nsTextElementPtr): int
    {
        return NSTextElement::wrap($nsTextElementPtr);
    }
}

if (! function_exists('ns_textelement_destroy')) {
    function ns_textelement_destroy(int $element): void
    {
        NSTextElement::destroy($element);
    }
}

if (! function_exists('ns_textelement_is_represented_element')) {
    function ns_textelement_is_represented_element(int $element): bool
    {
        return NSTextElement::isRepresentedElement($element);
    }
}

if (! function_exists('ns_textelement_child_elements_count')) {
    function ns_textelement_child_elements_count(int $element): int
    {
        return NSTextElement::childElementsCount($element);
    }
}

if (! function_exists('ns_textelement_element_range_ptr')) {
    function ns_textelement_element_range_ptr(int $element): int
    {
        return NSTextElement::elementRangePtr($element);
    }
}

if (! function_exists('ns_textelement_text_content_manager')) {
    function ns_textelement_text_content_manager(int $element): int
    {
        return NSTextElement::textContentManager($element);
    }
}
