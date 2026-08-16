<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTextFieldBezelStyle` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum TextFieldBezelStyle: int
{
    case TEXT_FIELD_SQUARE_BEZEL = 0;
    case TEXT_FIELD_ROUNDED_BEZEL = 1;
}
