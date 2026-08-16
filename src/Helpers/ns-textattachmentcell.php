<?php

use AppKit\NS\NSTextAttachmentCell\NSTextAttachmentCell;

/*
| NSTextAttachmentCell helpers — 1:1 over AppKit\NS\NSTextAttachmentCell\NSTextAttachmentCell
*/

if (! function_exists('ns_textattachmentcell_create')) {
    function ns_textattachmentcell_create(): int
    {
        return NSTextAttachmentCell::create();
    }
}

if (! function_exists('ns_textattachmentcell_wrap')) {
    function ns_textattachmentcell_wrap(int $nsTextAttachmentCellPtr): int
    {
        return NSTextAttachmentCell::wrap($nsTextAttachmentCellPtr);
    }
}

if (! function_exists('ns_textattachmentcell_destroy')) {
    function ns_textattachmentcell_destroy(int $cell): void
    {
        NSTextAttachmentCell::destroy($cell);
    }
}

if (! function_exists('ns_textattachmentcell_set_attachment')) {
    function ns_textattachmentcell_set_attachment(int $cell, int $attachment): void
    {
        NSTextAttachmentCell::setAttachment($cell, $attachment);
    }
}

if (! function_exists('ns_textattachmentcell_get_attachment')) {
    function ns_textattachmentcell_get_attachment(int $cell): int
    {
        return NSTextAttachmentCell::getAttachment($cell);
    }
}

if (! function_exists('ns_textattachmentcell_cell_size')) {
    function ns_textattachmentcell_cell_size(int $cell): array
    {
        return NSTextAttachmentCell::cellSize($cell);
    }
}

if (! function_exists('ns_textattachmentcell_cell_baseline_offset')) {
    function ns_textattachmentcell_cell_baseline_offset(int $cell): array
    {
        return NSTextAttachmentCell::cellBaselineOffset($cell);
    }
}
