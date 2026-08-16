<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSPrintPanelOptions` (NSUInteger). Pass `::CASE->value` into ns_* ints. */
enum PrintPanelOptions: int
{
    case PRINT_PANEL_SHOWS_COPIES = 1;
    case PRINT_PANEL_SHOWS_PAGE_RANGE = 2;
    case PRINT_PANEL_SHOWS_PAPER_SIZE = 4;
    case PRINT_PANEL_SHOWS_ORIENTATION = 8;
    case PRINT_PANEL_SHOWS_SCALING = 16;
    case PRINT_PANEL_SHOWS_PRINT_SELECTION = 32;
    case PRINT_PANEL_SHOWS_PAGE_SETUP_ACCESSORY = 256;
    case PRINT_PANEL_SHOWS_PREVIEW = 131072;
}
