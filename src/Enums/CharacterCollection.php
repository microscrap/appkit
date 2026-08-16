<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSCharacterCollection` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum CharacterCollection: int
{
    case IDENTITY_MAPPING_CHARACTER_COLLECTION = 0;
    case ADOBE_CNS_1_CHARACTER_COLLECTION = 1;
    case ADOBE_GB_1_CHARACTER_COLLECTION = 2;
    case ADOBE_JAPAN_1_CHARACTER_COLLECTION = 3;
    case ADOBE_JAPAN_2_CHARACTER_COLLECTION = 4;
    case ADOBE_KOREA_1_CHARACTER_COLLECTION = 5;
}
