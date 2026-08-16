<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSLevelIndicatorStyle` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum LevelIndicatorStyle: int
{
    case RELEVANCY = 0;
    case CONTINUOUS_CAPACITY = 1;
    case DISCRETE_CAPACITY = 2;
    case RATING = 3;
}
