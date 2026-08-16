<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** Values for preferredForTextStyle / NSFontTextStyle. */
enum FontTextStyleKind: int
{
    case LARGE_TITLE = 0;
    case TITLE1 = 1;
    case TITLE2 = 2;
    case TITLE3 = 3;
    case HEADLINE = 4;
    case SUBHEADLINE = 5;
    case BODY = 6;
    case CALLOUT = 7;
    case FOOTNOTE = 8;
    case CAPTION1 = 9;
    case CAPTION2 = 10;
}
