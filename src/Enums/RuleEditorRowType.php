<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSRuleEditorRowType` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum RuleEditorRowType: int
{
    case SIMPLE = 0;
    case COMPOUND = 1;
}
