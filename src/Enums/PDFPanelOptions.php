<?php

namespace Microscrap\Bindings\AppKit\Enums;

/** AppKit `NSPDFPanelOptions` (NSInteger). Pass `::CASE->value` into ns_* ints. */
enum PDFPanelOptions: int
{
    case PDF_PANEL_SHOWS_PAPER_SIZE = 4;
    case PDF_PANEL_SHOWS_ORIENTATION = 8;
    case PDF_PANEL_REQUESTS_PARENT_DIRECTORY = 16777216;
}
