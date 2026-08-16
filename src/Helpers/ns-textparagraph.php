<?php

use AppKit\NS\NSTextParagraph\NSTextParagraph;

/*
| NSTextParagraph helpers — 1:1 over AppKit\NS\NSTextParagraph\NSTextParagraph
*/

if (! function_exists('ns_textparagraph_create')) {
    function ns_textparagraph_create(string $value = ''): int
    {
        return NSTextParagraph::create($value);
    }
}

if (! function_exists('ns_textparagraph_wrap')) {
    function ns_textparagraph_wrap(int $nsTextParagraphPtr): int
    {
        return NSTextParagraph::wrap($nsTextParagraphPtr);
    }
}

if (! function_exists('ns_textparagraph_destroy')) {
    function ns_textparagraph_destroy(int $paragraph): void
    {
        NSTextParagraph::destroy($paragraph);
    }
}

if (! function_exists('ns_textparagraph_get_attributed_string')) {
    function ns_textparagraph_get_attributed_string(int $paragraph): string
    {
        return NSTextParagraph::getAttributedString($paragraph);
    }
}

if (! function_exists('ns_textparagraph_paragraph_content_range_ptr')) {
    function ns_textparagraph_paragraph_content_range_ptr(int $paragraph): int
    {
        return NSTextParagraph::paragraphContentRangePtr($paragraph);
    }
}

if (! function_exists('ns_textparagraph_paragraph_separator_range_ptr')) {
    function ns_textparagraph_paragraph_separator_range_ptr(int $paragraph): int
    {
        return NSTextParagraph::paragraphSeparatorRangePtr($paragraph);
    }
}
