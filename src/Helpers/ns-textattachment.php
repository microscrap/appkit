<?php

use AppKit\NS\NSTextAttachment\NSTextAttachment;

/*
| NSTextAttachment helpers — 1:1 over AppKit\NS\NSTextAttachment\NSTextAttachment
*/

if (! function_exists('ns_textattachment_create')) {
    function ns_textattachment_create(): int
    {
        return NSTextAttachment::create();
    }
}

if (! function_exists('ns_textattachment_create_with_data')) {
    function ns_textattachment_create_with_data(string $data, string $fileType = ''): int
    {
        return NSTextAttachment::createWithData($data, $fileType);
    }
}

if (! function_exists('ns_textattachment_wrap')) {
    function ns_textattachment_wrap(int $nsTextAttachmentPtr): int
    {
        return NSTextAttachment::wrap($nsTextAttachmentPtr);
    }
}

if (! function_exists('ns_textattachment_destroy')) {
    function ns_textattachment_destroy(int $attachment): void
    {
        NSTextAttachment::destroy($attachment);
    }
}

if (! function_exists('ns_textattachment_set_file_type')) {
    function ns_textattachment_set_file_type(int $attachment, string $fileType): void
    {
        NSTextAttachment::setFileType($attachment, $fileType);
    }
}

if (! function_exists('ns_textattachment_get_file_type')) {
    function ns_textattachment_get_file_type(int $attachment): string
    {
        return NSTextAttachment::getFileType($attachment);
    }
}

if (! function_exists('ns_textattachment_set_image')) {
    function ns_textattachment_set_image(int $attachment, int $image): void
    {
        NSTextAttachment::setImage($attachment, $image);
    }
}

if (! function_exists('ns_textattachment_get_image')) {
    function ns_textattachment_get_image(int $attachment): int
    {
        return NSTextAttachment::getImage($attachment);
    }
}

if (! function_exists('ns_textattachment_set_bounds')) {
    function ns_textattachment_set_bounds(int $attachment, float $x, float $y, float $width, float $height): void
    {
        NSTextAttachment::setBounds($attachment, $x, $y, $width, $height);
    }
}

if (! function_exists('ns_textattachment_get_bounds')) {
    function ns_textattachment_get_bounds(int $attachment): array
    {
        return NSTextAttachment::getBounds($attachment);
    }
}

if (! function_exists('ns_textattachment_set_attachment_cell')) {
    function ns_textattachment_set_attachment_cell(int $attachment, int $cell): void
    {
        NSTextAttachment::setAttachmentCell($attachment, $cell);
    }
}

if (! function_exists('ns_textattachment_get_attachment_cell')) {
    function ns_textattachment_get_attachment_cell(int $attachment): int
    {
        return NSTextAttachment::getAttachmentCell($attachment);
    }
}

if (! function_exists('ns_textattachment_set_line_layout_padding')) {
    function ns_textattachment_set_line_layout_padding(int $attachment, float $padding): void
    {
        NSTextAttachment::setLineLayoutPadding($attachment, $padding);
    }
}

if (! function_exists('ns_textattachment_get_line_layout_padding')) {
    function ns_textattachment_get_line_layout_padding(int $attachment): float
    {
        return NSTextAttachment::getLineLayoutPadding($attachment);
    }
}
