<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSTextInputTraitType` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum TextInputTraitType: int
{
    case DEFAULT = 0;
    case NO = 1;
    case YES = 2;
}
