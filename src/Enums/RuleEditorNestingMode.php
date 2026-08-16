<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSRuleEditorNestingMode` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum RuleEditorNestingMode: int
{
    case SINGLE = 0;
    case LIST = 1;
    case COMPOUND = 2;
    case SIMPLE = 3;
}
